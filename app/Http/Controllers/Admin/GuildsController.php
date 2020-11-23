<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PesquisasRequest;

class GuildsController extends Controller
{
    /**
     * UsuariosController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin');
    }

    /**
     * @param PesquisasRequest $pesquisasRequest
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(PesquisasRequest $pesquisasRequest)
    {
        return view('admin.guilds.index');
    }

    /**
     * @param Request $request
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('admin.guilds.create');
    }

    /**
     * @param $id
     * @param UpdateUsuarioRequest $updateUsuarioRequest
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id, Request $request)
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
