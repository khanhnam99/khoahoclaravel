<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class FrontendLoginController extends Controller
{

    private $data = [];

    public function __construct()
    {
        $this->guard = "web";
    }


    public function login( Request $request )
    {
        $user = Auth::guard('web')->user();
        if ( $user ) {
            return redirect(Route('frontend.product.index'));
        }

        if ( $request->getMethod() == 'POST' ) {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password];

            if ( Auth::guard('web')->attempt($credentials, true) ) {
                $value = $request->session()->get('url');
                if($value) {
                    return redirect($value);
                }
                return redirect(Route('frontend.product.index'));
            }
            return back()->withErrors([
                'error' => 'Please check your password and email.',
            ]);
        }

        $this->data['urlRedirect'] = Route('frontend.auth.login');
        return View('components.backend.users.login', $this->data);
    }

    public function logout()
    {
        if ( Auth()->guard('web')->user()->id ) {
            Auth()->guard('web')->logout();
        }
        return redirect(Route('backend.auth.login'));
    }
}
