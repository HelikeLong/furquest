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

    /**
     * Adds a contact to the current user
     *
     * @param UserContactRequest $request
     * @return \App\Models\UserContact|null
     */
    public function add(UserContactRequest $request)
    {
        return $this->userContactService->store($request);
    }

    /**
     * Gets a contact or a collection of contacts of the current user
     *
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Relations\HasMany[]
     */
    public function get($id = 0)
    {
        if ($id) {
            return $this->current->user_contacts()->findOrFail($id);
        } else {
            return $this->current->user_contacts()->get();
        }
    }

    /**
     * Edits a contact of the current user
     *
     * @param UserContactRequest $request
     * @param $id
     * @return \App\Models\UserContact|null
     */
    public function edit(UserContactRequest $request, $id)
    {
        return $this->userContactService->store($request, $id);
    }

    /**
     * Soft deletes a contact of the current user
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove($id)
    {
        return response()->json(['response' => $this->userContactRepository->remove($id)], 200);
    }
}
