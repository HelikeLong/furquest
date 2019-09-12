<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository extends BaseRepository
{
    /**
     * @var User
     */
    public $model;
    
    /**
     * UserRepository constructor.
     * @param User $User
     */
public function __construct(User $User)
    {
        $this->model = $User;
    }

    /**
     * Get specific user non-sensitive data
     *
     * @param $id
     * @return array
     */
    public function getProfile($id)
    {
        $user = $this->model()
            ->select(['id', 'name', 'social_name', 'species', 'bio', 'photo'])
            ->with(['user_contacts', 'user_contacts.contacts_type'])
            ->findOrFail($id)
            ->toArray();

        if ($id == Auth::user()->getAuthIdentifier()) {
            $user['current'] = 1;
        }

        return $user;
    }

    /**
     * Gets current user main data
     *
     * @param $id
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getCurrent($id)
    {
        return $this->model()
            ->select(['id', 'name', 'social_name', 'species', 'photo'])
            ->with(['guilds'])
            ->find($id);
    }
}
