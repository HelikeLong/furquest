<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserContactRequest;
use App\Repositories\UserContactRepository;
use App\Http\Controllers\Controller;
use App\Services\UserContactService;

class UserContactController extends Controller
{
    /** @var UserContactRepository */
    private $userContactRepository;
    /** @var UserContactService */
    private $userContactService;

    public function __construct(UserContactRepository $userContactRepository, UserContactService $userContactService)
    {
        parent::__construct();

        $this->userContactRepository = $userContactRepository;
        $this->userContactService = $userContactService;
    }

    public function add(UserContactRequest $request)
    {
        return $this->userContactService->store($request);
    }

    public function get($id = 0)
    {
        if ($id) {
            return $this->current->user_contacts()->findOrFail($id);
        } else {
            return $this->current->user_contacts()->get();
        }
    }

    public function edit(UserContactRequest $request, $id)
    {
        return $this->userContactService->store($request, $id);
    }

    public function remove($id)
    {
        return response()->json(['response' => $this->userContactRepository->remove($id)], 200);
    }
}
