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
     * @return UserContact|null
     */
    public function store(UserContactRequest $request)
    {
        $userContact = [];
        if ($data = $request->validated()) {
            for ($i = 0; $i < count($data['id']); $i++) {
                /** @var UserContact $userContact */
                $userContact[$i] = UserContact::firstOrNew(['id' => $data['id'][$i]]);
                $userContact[$i]->fill([
                    'contacts_types_id' => $data['contacts_types_id'][$i],
                    'value' => $data['value'][$i]
                ]);
                $userContact[$i]->user_id = auth()->user()->id;
                $userContact[$i]->save();
            }
        }

        return $userContact;
    }
}
