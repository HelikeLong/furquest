<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $viewData;

    /** @var User */
    protected $current;

    function __construct()
    {
        $this->viewData = [];

        View::share('arrMenu', $this->getMenu());
        View::share('iconMenu', [
            'dashboard' => 'nc-layout-11',
            'participants' => 'nc-single-02',
            'participants.users' => 'nc-badge',
            'participants.guilds' => 'nc-user-run',
            'participants.tickets' => 'nc-credit-card',
            'quests' => 'nc-map-big',
            'quests.quests' => 'nc-pin-3',
            'quests.questSteps' => 'nc-paper',
            'quests.questStepTips' => 'nc-bullet-list-67',
            'quests.questRoutes' => 'nc-compass-05'
        ]);
        View::share('elementActive', $this->getCurrentPage());

        $this->middleware(function ($request, $next) {
            $this->current = auth()->user();
            return $next($request);
        });
    }

    private function getMenu() {
        return collect(Route::getRoutes())->reduce(function ($carry = [], $route) {
            if (Str::startsWith($route->getName(), 'admin') && Str::endsWith($route->getName(), 'index')) {
                $routeName = str_replace(['admin.', '.index'], '', $route->getName());
                $routes = explode('.', $routeName);

                if (count($routes) > 1) {
                    $carry[$routes[0]]['childs'][] = [
                        'name' => $routeName,
                        'route' => $route->getName(),
                        'title' => preg_replace('/(?<!\ )[A-Z]/', ' $0', $routes[1])
                    ];
                } else {
                    $carry[] = [
                        'name' => $routeName,
                        'route' => $route->getName(),
                        'title' => preg_replace('/(?<!\ )[A-Z]/', ' $0', $routes[0])
                    ];
                }
            }
        
            return $carry;
        });
    }

    private function getCurrentPage() {
        $routeName = str_replace(['admin.', '.index'], '', Route::currentRouteName());
        $titleArr = explode('.', $routeName);

        if (count($titleArr) > 1) {
            unset($titleArr[0]);
            $titleArr = collect($titleArr)->reduce(function ($carry = [], $title) {
                $carry[] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $title);
                return $carry;
            });
            $routeTitle = implode(' - ', $titleArr);
        } else {
            $routeTitle = preg_replace('/(?<!\ )[A-Z]/', ' $0', $titleArr[0]);
        }

        return [
            'menuName' => $routeName,
            'title' => $routeTitle
        ];
    }
}
