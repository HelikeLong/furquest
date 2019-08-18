<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\UploadService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /** @var UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();

        $this->userRepository = $userRepository;
    }

    /**
     * Returns Current user's data
     *
     * @param Request $request
     * @return mixed
     */
    public function current(Request $request)
    {
        return $this->userRepository->getCurrent($request->user()->id);
    }

    /**
     * Returns specific user's non-sensitive data (for profile)
     *
     * @param $id
     * @return UserRepository|UserRepository[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function get($id)
    {
        return $this->userRepository->getProfile($id);
    }

    /**
     * Edits current user's data
     *
     * @param UserRequest $request
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function edit(UserRequest $request)
    {
        if ($request->validated()) {
            $this->current->fill($request->validated());
            $this->current->save();
        }

        return $this->current;
    }

    /**
     * Edits current user's photo
     *
     * @param UserRequest $request
     * @return mixed
     */
    public function editPhoto(UserRequest $request)
    {
        $upload = new UploadService();

        $userId = $this->current->id;
        $upload->Image(
            [$request->photo],
            md5($userId),
            getimagesize($request->photo)[0],
            'users/'.$userId,
            [250],
            true
        );

        if ($upload->Uploaded) {
            $this->current->photo = str_replace('users/'.$userId.'/', '', $upload->Uploaded[0]);
            $this->current->save();
        }

        return ['photo' => $this->current->photo];
    }
}
