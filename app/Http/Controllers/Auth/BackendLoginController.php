<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class BackendLoginController extends BackendController
{

    private $data = [];

    public function __construct()
    {
        $this->guard = "backend";
    }

    public function create( Request $request )
    {

    }

    public function login( Request $request )
    {
        $user = Auth::guard('backend')->user();
        if ( $user ) {
            return redirect(Route('backend.dashboard.index'));
        }

        if ( $request->getMethod() == 'POST' ) {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
                'status' => 1];

            if ( Auth::guard('backend')->attempt($credentials, true) ) {
                //$request->session()->regenerate();
                return redirect(Route('backend.dashboard.index'));

            }
            return back()->withErrors([
                'error' => 'Please check your password and email.',
            ]);
           // return back()->withInput($request->input())->withErrors($validator->errors());
        }
        $this->data['urlRedirect'] = Route('backend.admin.login');
        return View('components.backend.users.login', $this->data);
    }

    public function logout()
    {
        if ( Auth()->guard('backend')->user()->id ) {
            Auth()->guard('backend')->logout();
        }
        return redirect(Route('backend.auth.login'));
    }
}
