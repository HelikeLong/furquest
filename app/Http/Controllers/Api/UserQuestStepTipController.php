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

    public function get($quest, $step)
    {
        return $this->userQuestStepTipRepository->getTips($quest, $step);
    }
}
