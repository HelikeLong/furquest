<?php

namespace App\Services;

use App\Http\Requests\UserContactRequest;
use App\Models\UserContact;
use App\Repositories\UserContactRepository;

/**
 * Class UserContactServiceService
 * @package App\Services
 */
class UserContactService
{
    /** @var UserContactRepository */
    private $userContactRepository;

    /**
     * UserContactServiceService constructor.
     * @param UserContactRepository $userContactRepository
     */
    public function __construct(UserContactRepository $userContactRepository)
    {
        $this->userContactRepository = $userContactRepository;
    }

    /**
     * Saves a contact for the current user
     *
     * @param UserContactRequest $request
     * @param int $id
     * @return UserContact|null
     */
    public function store(UserContactRequest $request, $id = 0)
    {
        $userContact = null;
        if ($request->validated()) {
            /** @var UserContact $userContact */
            $userContact = UserContact::firstOrNew(['id' => $id]);
            $userContact->fill($request->validated());
            $userContact->user_id = auth()->user()->id;
            $userContact->save();
        }

        return $userContact;
    }
}