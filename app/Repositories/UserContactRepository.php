<?php

namespace App\Repositories;

use App\Models\UserContact;

/**
 * Class UserContactRepository
 * @package App\Repositories
 */
class UserContactRepository extends BaseRepository
{
    /**
     * @var UserContact
     */
    public $model;
    
    /**
     * UserContactRepository constructor.
     * @param UserContact $UserContact
     */
    public function __construct(UserContact $UserContact)
    {
        $this->model = $UserContact;
    }

    /**
     * Removes a contact from the current user
     *
     * @param $id
     * @return bool|mixed|null
     */
    public function remove($id)
    {
        try {
            return $this->model()
                ->where([
                    'user_id' => auth()->user()->id,
                    'id' => $id
                ])->delete();
        } catch (\Exception $e) {
            return false;
        }
    }
}