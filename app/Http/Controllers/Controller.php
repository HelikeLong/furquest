<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $viewData;

    /** @var User */
    protected $current;

    function __construct()
    {
        $this->viewData = [];
        $this->middleware(function ($request, $next) {
            $this->current = auth()->user();
            return $next($request);
        });
    }

}
