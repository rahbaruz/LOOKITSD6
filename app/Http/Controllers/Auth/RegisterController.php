<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function sign_up(){
        return view("page.auth.sign_up");
    }

    public function sign_up_student(){
        return view("page.auth.input", ['state' => 'student']);
    }

    public function sign_up_organizer(){
        return view("page.auth.input", ['state' => 'organizer']);
    }

    protected function create(Request $request)
    {
        // dd($request["state"]);
        if ($request['state'] == "student") {
            $this->validate($request, [
                'email'           => 'required|max:255|unique:users',
                'password'           => 'required',
                'name'           => 'required',
                'field_of_study'           => 'required',
            ]);

            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'phone' => $request["phone"],
                'avatar' => "avatars/avatar.png",
                'field_of_study' => $request["field_of_study"],
                'role' => "student",
            ]);
        }else {
            $this->validate($request, [
                'email' => 'required|max:255|unique:users',
                'password' => 'required',
                'name' => 'required',
                'specialization' => 'required',
                'company' => 'required',
            ]);
            
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'avatar' => "avatars/avatar.png",
                'company' => $request['company'],
                'specialization' => $request['specialization'],
                'role' => "organization",
            ]);
        }
        return redirect("signin");
    }

}
