<?php

namespace App\Repositories;

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
            return $this->getTips($userQuest, $userQuestSteps);
        }
    }
}
