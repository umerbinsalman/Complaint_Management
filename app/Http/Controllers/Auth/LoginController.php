<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view("auth/login");
    }

    public function login(Request $request)
    {
        $rules=
            [
                'username'=>'required',
                'password'=>'required'
            ];
        $this->validate($request,$rules);
        $username=$request->input('username');
        $password=$request->input('password');
        if(Auth::attempt(['username'=>$username,'password'=>$password]))
        {
            return redirect('/dashboard');
        }
        else
        {
            return redirect()->back()->with('fail', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showDashboard()
    {
        return view("dashboard");
    }
}
