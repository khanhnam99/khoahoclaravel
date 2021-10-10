<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;
use View;
use Auth;


class BackendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $_ref;
    private $modulesControllerAdminRepos;
    protected $user;

    public function __construct()
    {
        $this->_ref = Request()->get('_ref', null);
        View::share('title', 'Dashboard');
        View::share('description', '1');
        View::share('keywords', '1');
        View::share('author', '1');
        //View::share('current_url', \App\Utils\Common::J_getCurUrl());

        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();

        $routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list($controller, $action) = explode('@', $controllerAction);
        View::share('controller', $controller);
        View::share('action', $action);
        View::share('routeCurrentName', $route);
        View::share('routeName', $name);
        View::share('actionName', $action);

    }
}
