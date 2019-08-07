<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserQuestStepRequest;
use App\Models\UserQuestStep;
use App\Repositories\UserQuestStepRepository;
use App\Http\Controllers\Controller;

class UserQuestStepController extends Controller
{
    /** @var UserQuestStepRepository */
    private $userQuestStepRepository;

    public function __construct(UserQuestStepRepository $userQuestStepRepository)
    {
        parent::__construct();

        $this->userQuestStepRepository = $userQuestStepRepository;
    }

    /**
     * Gets a step or a collection of steps
     *
     * @param $quest
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|object|null
     */
    public function get($quest, $id = 0)
    {
        return $this->userQuestStepRepository->getSteps($quest, $id);
    }

    /**
     * Handles the finishing of a step and deliveries the next step
     *
     * @param $quest
     * @param $step
     * @param UserQuestStepRequest $userQuestStepRequest
     * @return UserQuestStep|\Illuminate\Http\JsonResponse|string
     */
    public function next($quest, $step, UserQuestStepRequest $userQuestStepRequest)
    {
        $res = $this->userQuestStepRepository->finishStep($step, $userQuestStepRequest);
        if (is_string($res)) {
            return response()->json(['msg' => $res], 400);
        }
        return $res;
    }
}
