<?php

namespace App\Http\Middleware;

use View;
use Closure;
use Illuminate\Http\Request;
use Auth;

class FrontendMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next )
    {

//        //dd($request->route()->uri('acp/login'));
//        if ($request->route()->uri('admin/login')) {
//            return redirect(Route('backend.admin.login'));
//        }

        // return Auth::onceBasic() ?: $next($request);
        if ( !Auth::guard('web')->user() ) {

           // return redirect()->intended(route('backend.admin.login'));
            return redirect(Route('backend.admin.login'));
        }

//            $menu = [];
//            View::share('Menus', $menu);

        return $next($request);

    }
}
