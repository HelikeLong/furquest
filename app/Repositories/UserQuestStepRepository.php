<?php

namespace App\Repositories;

use App\Http\Requests\UserQuestStepRequest;
use App\Models\Guild;
use App\Models\QuestRoute;
use App\Models\QuestRoutesStep;
use App\Models\StepReward;
use App\Models\Tip;
use App\Models\UserQuest;
use App\Models\UserQuestStep;
use App\Models\UserQuestStepTip;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class UserQuestStepRepository
 * @package App\Repositories
 */
class UserQuestStepRepository extends BaseRepository
{
    /**
     * @var UserQuestStep
     */
    public $model;
    
    /**
     * UserQuestStepRepository constructor.
     * @param UserQuestStep $UserQuestStep
     */
    public function __construct(UserQuestStep $UserQuestStep)
    {
        $this->model = $UserQuestStep;
    }

    /**
     * @param $userQuest
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|object|null
     */
    public function getSteps($userQuest, $id = 0)
    {
        $steps = $this->model()
            ->where([
                'user_quest_id' => $userQuest
            ])
            ->with('step', 'user_quest_step_tip', 'user_quest_step_tip.tip');

        if ($id) {
            return $steps->where(['id' => $id])
                ->first();
        } else {
            return $steps->get();
        }
    }

    /**
     * Finish the current step
     *
     * @param $userQuestStepId
     * @param UserQuestStepRequest $userQuestStepRequest
     * @return UserQuestStep|string
     */
    public function finishStep($userQuestStepId, UserQuestStepRequest $userQuestStepRequest)
    {
        /** @var UserQuestStep $userQuestStep */
        $userQuestStep = $this->model()->findOrFail($userQuestStepId);
        if ($userQuestStep->status == 1) {
            return 'ALREADY_FINISHED';
        }

        // Process the qrcodes
        $stepResolution = explode('###', $userQuestStep->step()->first()->resolution);
        $resolution = $userQuestStepRequest->answers;

        // Check qrcodes
        if (!$this->checkResolution($stepResolution, $resolution)) {
            return 'WRONG_RESOLUTION';
        } else {
            //Finish step for the active user's guild partners
            $this->processFinishStepGuild($userQuestStep);

            // Finish step for the active user
            return $this->processFinishStep($userQuestStep);
        }
    }

    public function checkResolution($stepResolution, $resolution)
    {
        $result = true;
        foreach ($resolution as $res) {
            $res = strip_tags(strtolower($res));
            $result &= (in_array($res, $stepResolution));
        }
        return $result;
    }

    /**
     * Process the step finishing tasks
     *
     * @param UserQuestStep $userQuestStep
     * @return UserQuestStep|string
     */
    private function processFinishStep(UserQuestStep $userQuestStep) {
        // Mark step as finished
        $userQuestStep->status = 1;
        $userQuestStep->save();

        /** @var UserQuest $userQuest */
        $userQuest = $userQuestStep->user_quest()->first();

        // Insert remaining step's tips and mark as finish
        /** @var Tip[] $tips */
        $tips = $userQuestStep->step()->first()->tips()->get();
        foreach ($tips as $tip) {
            /** @var UserQuestStepTip $userQuestStepTip */
            $userQuestStepTip = UserQuestStepTip::firstOrNew([
                'user_quest_id' => $userQuest->id,
                'user_quest_step_id' => $userQuestStep->id,
                'tip_id' => $tip->id
            ]);
            if (!$userQuestStepTip->exists) {
                $userQuestStepTip->save();
            }
        }

        //Get step rewards
        /** @var StepReward $stepRewards */
        $stepRewards = $userQuestStep->step()->first()->step_rewards()
            ->with('reward_type')->get()->toArray();

        // Get next step
        /** @var QuestRoute $questRoute */
        $questRoute = $userQuest->quest_route()->first();
        /** @var QuestRoutesStep $nextStep */
        $nextStep = $questRoute->quest_routes_steps()->where([
            'step_origin_id' => $userQuestStep->step_id
        ])->first();

        if ($nextStep && $nextStep->step_dest()) {
            // Start next step for the user
            $new_userQuestStep = new UserQuestStep();
            $new_userQuestStep->step_id = $nextStep->step_dest()->id;
            $new_userQuestStep->user_quest_id = $userQuest->id;
            $new_userQuestStep->save();

            $stepRewards['nextStep'] = $new_userQuestStep;
        }

        return $stepRewards;
    }

    /**
     * Process the step finishing tasks for guild members
     *
     * @param UserQuestStep $userQuestStep
     * @return UserQuestStep|string
     */
    public function processFinishStepGuild(UserQuestStep $userQuestStep)
    {
        $guildMembers = Guild::whereHas('users', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })
            ->first()
            ->users()->get();

        foreach ($guildMembers as $guildMember) {
            if ($guildMember->id === auth()->user()->id) {
                continue;
            }
            $memberQuestStep = UserQuest::where([
                'user_id' => $guildMember->id,
                'quest_route_id' => $userQuestStep->user_quest->quest_route_id
            ])->first()
            ->user_quest_steps()
            ->where('step_id', $userQuestStep->step->id)
            ->first();

            $this->processFinishStep($memberQuestStep);
        }
    }
}
