<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UserContactRequest;
use App\Models\ContactsType;
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
    public function save(UserContactRequest $request)
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
            return $this->current->user_contacts()
                ->with('contacts_type')
                ->findOrFail($id);
        } else {
            return $this->current->user_contacts()
                ->with('contacts_type')
                ->get();
        }
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

    public function getTypes()
    {
        return ContactsType::get();
    }
}
