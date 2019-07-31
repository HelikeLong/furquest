<?php

namespace App\Repositories;

use App\Models\UserQuestStep;

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
}