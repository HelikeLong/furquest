<?php

namespace App\Http\Controllers\Api;

use App\Models\UserQuestStepTip;
use App\Repositories\UserQuestStepTipRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserQuestStepTipController extends Controller
{
    /** @var UserQuestStepTipRepository */
    private $userQuestStepTipRepository;

    public function __construct(UserQuestStepTipRepository $userQuestStepTipRepository)
    {
        parent::__construct();

        $this->userQuestStepTipRepository = $userQuestStepTipRepository;
    }

    /**
     * Gets the tips available for a step
     *
     * @param $quest
     * @param $step
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|object|null
     */
    public function get($quest, $step)
    {
        return $this->userQuestStepTipRepository->getTips($quest, $step);
    }

    public function next($quest, $step)
    {
        return $this->userQuestStepTipRepository->nextTip($quest, $step);
    }
}
