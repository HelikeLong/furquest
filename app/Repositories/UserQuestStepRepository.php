<?php

namespace App\Repositories;

use App\Http\Requests\UserQuestStepRequest;
use App\Models\QuestRoute;
use App\Models\QuestRoutesStep;
use App\Models\Tip;
use App\Models\UserQuest;
use App\Models\UserQuestStep;
use App\Models\UserQuestStepTip;

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
            ->with('step');

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
        $stepQrCode = $userQuestStep->step()->first()->qrcode;
        $qrcode = $userQuestStepRequest->qrcode;

        // Check qrcodes
        if ($stepQrCode != $qrcode) {
            return 'WRONG_QRCODE';
        } else {
            // Finish step for the active user
            return $this->processFinishStep($userQuestStep);

            //TODO: Finish step for the active user's guild partners
        }
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

        // Get next step
        /** @var QuestRoute $questRoute */
        $questRoute = $userQuest->quest_route()->first();
        /** @var QuestRoutesStep $nextStep */
        $nextStep = $questRoute->quest_routes_steps()->where([
            'step_origin_id' => $userQuestStep->step_id
        ])->first();

        if ($nextStep) {
            // Start next step for the user
            $new_userQuestStep = new UserQuestStep();
            $new_userQuestStep->step_id = $nextStep->step_dest->id;
            $new_userQuestStep->user_quest_id = $userQuest->id;
            $new_userQuestStep->save();

            return $new_userQuestStep;
        } else {
            return 'STEP_NOT_FOUND';
        }
    }
}