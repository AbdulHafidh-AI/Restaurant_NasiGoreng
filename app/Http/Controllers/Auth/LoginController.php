<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * login sebagai admin
     * @param  \Illuminate\Http\Request  $request
     */
    public function loginAsAdmin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('error', 'Email atau Password Salah');
    }
    
}
