<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

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
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]
     */
    public function getProfile($id)
    {
        return $this->model()
            ->select(['id', 'name', 'social_name', 'species', 'bio', 'photo'])
            ->with(['user_contacts'])
            ->findOrFail($id);
    }
}