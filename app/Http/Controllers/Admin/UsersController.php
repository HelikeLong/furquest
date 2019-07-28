<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PesquisasRequest;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
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
     * @param PesquisasRequest $pesquisasRequest
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(PesquisasRequest $pesquisasRequest)
    {

    }

    /**
     * @param ControleAcessoService $controleAcessoService
     * @param StoreUsuarioRequest $storeUsuarioRequest
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create(StoreUsuarioRequest $storeUsuarioRequest)
    {

    }

    /**
     * @param $id
     * @param UpdateUsuarioRequest $updateUsuarioRequest
     * @param ControleAcessoService $controleAcessoService
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id, UpdateUsuarioRequest $updateUsuarioRequest)
    {

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

    }

    /**
     * Exibir itens removidos com softdeleted
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function trashed(PesquisasRequest $pesquisasRequest)
    {

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($id)
    {

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete($id)
    {

    }
}
