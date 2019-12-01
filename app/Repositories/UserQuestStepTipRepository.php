<?php

namespace App\Repositories;

use App\Models\Guild;
use App\Models\UserQuest;
use App\Models\UserQuestStep;
use App\Models\UserQuestStepTip;

/**
 * Class UserQuestStepTipRepository
 * @package App\Repositories
 */
class UserQuestStepTipRepository extends BaseRepository
{
    /**
     * @var UserQuestStepTip
     */
    public $model;
    
    /**
     * UserQuestStepTipRepository constructor.
     * @param UserQuestStepTip $UserQuestStepTip
     */
    public function __construct(UserQuestStepTip $UserQuestStepTip)
    {
        $this->model = $UserQuestStepTip;
    }

    /**
     * Return the available tips for a step
     *
     * @param $userQuest
     * @param int $userQuestSteps
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|object|null
     */
    public function getTips($userQuest, $userQuestSteps)
    {
        return $this->model()
            ->where([
                'user_quest_id' => $userQuest,
                'user_quest_step_id' => $userQuestSteps
            ])
            ->with('tip')
            ->get();
    }

    public function nextTip($userQuest, $userQuestSteps)
    {
        $step = UserQuestStep::where([
            'user_quest_id' => $userQuest,
            'id' => $userQuestSteps
        ])
        ->with(['step', 'step.tips'])
        ->first();

        $currentTips = $this->model()
            ->select(['id'])
            ->where([
                'user_quest_id' => $userQuest,
                'user_quest_step_id' => $userQuestSteps
            ])->count();

        $nextTip = $step->step->tips[$currentTips ? $currentTips : 0];
        if( $this->model()->create([
            'user_quest_id' => $userQuest,
            'user_quest_step_id' => $userQuestSteps,
            'tip_id' => $nextTip->id
        ]) ) {
            //TODO: Create tip for the active user's guild partners
            $guildMembers = Guild::whereHas('users', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })
                ->first()
                ->users()->get();

            foreach ($guildMembers as $guildMember) {
                if ($guildMember->id === auth()->user()->id) {
                    continue;
                }
                /** @var UserQuestStep $memberQuestStep */
                $memberQuestStep = UserQuest::where([
                    'user_id' => $guildMember->id,
                    'quest_route_id' => $step->user_quest->quest_route_id
                ])->first()
                    ->user_quest_steps()
                    ->where('step_id', $step->step->id)
                    ->first();

                $this->model()->create([
                    'user_quest_id' => $memberQuestStep->user_quest_id,
                    'user_quest_step_id' => $memberQuestStep->id,
                    'tip_id' => $nextTip->id
                ]);
            }

            return $this->getTips($userQuest, $userQuestSteps);
        }
    }
}
