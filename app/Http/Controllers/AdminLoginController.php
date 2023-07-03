<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function adminLogin(Request $request)
    {

        if (Auth::attempt(['email' => $request->get('email') , 'password' => $request->get('password')

        ], $request->remember))
        {
            if (Auth::user())
            {
                notify()->success('Welcome '.Auth::user()->name);
                return redirect()->intended(route('admin.main'));
            }
            else
            {
                Auth::logout();
                notify()
                    ->error('Access Denied !');
                return Redirect::back();
            }
        }
        // else
        // {
        //     $errors = new MessageBag(['email' => ['Email or password is invalid or your account is deactive/ unverified']]);
        //     return Redirect::back()->withErrors($errors)->withInput($request->except('password'));
        //     return Redirect::back();
        // }
    }
}
