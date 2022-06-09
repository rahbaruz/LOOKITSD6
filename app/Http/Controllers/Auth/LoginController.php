<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('sign_out');
    }

    public function sign_in()
    {
        return view("page.auth.sign_in");
    }

    public function sign_out()
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('signin');
    }

    public function do_sign_in(Request $request)
    {
        // dd($request['email']);
        $this->validate($request, [
            'email'           => 'required|max:255|email',
            'password'           => 'required',
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            // Success
            return redirect('my');
        } else {
            session()->flash('failed', 'Failed to sigin');
            // Go back on error (or do what you want)
            return back();
        }

    }
}
