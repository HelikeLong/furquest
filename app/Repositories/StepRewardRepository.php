<?php

namespace App\Repositories;

use App\Models\QuestRoute;
use App\Models\QuestRoutesStep;
use App\Models\StepReward;
use App\Models\UserQuestStep;

/**
 * Class StepRewardRepository
 * @package App\Repositories
 */
class StepRewardRepository extends BaseRepository
{
    /**
     * @var StepReward
     */
    public $model;
    
    /**
     * StepRewardRepository constructor.
     * @param StepReward $StepReward
     */
    public function __construct(StepReward $StepReward)
    {
        $this->model = $StepReward;
    }

    public function getRewards($quest, $step)
    {
        /** @var UserQuestStep $userQuestStep */
        $userQuestStep = UserQuestStep::find($step);

        if ($userQuestStep->status) {
            //Get step rewards
            /** @var StepReward $stepRewards */
            $stepRewards = $userQuestStep->step()->first()->step_rewards()
                ->with('reward_type')->get()->toArray();

            // Get next step
            /** @var QuestRoute $questRoute */
            $questRoute = $userQuestStep->user_quest()->first()->quest_route()->first();
            /** @var QuestRoutesStep $nextStep */
            $nextStep = $questRoute->quest_routes_steps()->where([
                'step_origin_id' => $userQuestStep->step_id
            ])->first();

            if ($nextStep && $nextStep->step_dest_id) {
                $stepRewards['nextStep'] = UserQuestStep::where([
                    'user_quest_id' => $quest,
                    'step_id' => $nextStep->step_dest_id
                ])->first();
            }

            return $stepRewards;
        } else {
            return "STEP_NOT_FINISHED";
        }
    }
}
