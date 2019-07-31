<?php

namespace App\Repositories;

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
}