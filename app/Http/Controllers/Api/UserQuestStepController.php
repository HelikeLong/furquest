<?php

namespace App\Http\Controllers\Api;

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

    public function get($quest, $id = 0)
    {
        return $this->userQuestStepRepository->getSteps($quest, $id);
    }
}
