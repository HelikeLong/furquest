<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SearchRequest;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRequest;
use App\Models\UserType;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    protected $usuarios;
    protected $grupos;
    protected $status;

    /**
     * UsuariosController constructor.
     * @param UserRepository $usuarioRepository
     */
    public function __construct(UserRepository $usuarioRepository)
    {
        parent::__construct();
        $this->middleware('auth:admin');

        $this->usuarios = $usuarioRepository;
    }

    /**
     * @param SearchRequest $searchRequest
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(SearchRequest $searchRequest)
    {
        $users = User::where('user_type_id', '<>', UserType::ADMIN);

        if ($searchRequest->search) {
            $users
                ->where('name', 'like', "%".$searchRequest->search."%")
                ->orWhere('social_name', 'like', "%".$searchRequest->search."%")
                ->orWhere('email', 'like', "%".$searchRequest->search."%");
        }
            
        $users = $users->paginate(10);

        return view('admin.users.index')->with([
            'users' => $users
        ]);
    }

    /**
     * @param UserRequest $userRequest
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create(UserRequest $userRequest)
    {
        

        return view('admin.users.create')->with([]);
    }

    /**
     * @param $id
     * @param UserRequest $userRequest
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id, UserRequest $userRequest)
    {

        return view('admin.users.edit')->with([]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        
        return $this->successResponse('');
    }

    /**
     * Exibir itens removidos com softdeleted
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function trashed(SearchRequest $searchRequest)
    {

        return view('admin.users.trashed')->with([]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($id)
    {

        return $this->successResponse('');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete($id)
    {

        return $this->successResponse('');
    }
}
