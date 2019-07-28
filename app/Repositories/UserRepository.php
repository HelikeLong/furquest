<?php

namespace App\Repositories;

use App\Models\User;

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
}