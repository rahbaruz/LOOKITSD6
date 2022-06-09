<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        // dd($user->name);
        return view("page.profile.main", compact("user"));
    }

    public function edit()
    {
        $user = Auth::user();
        return view("page.profile.edit.main", compact("user"));
    }

    public function store(User $user, Request $request)
    {
        $data = $request->toArray();
        if ($user->avatar != $request['avatar'] && $request['avatar_temp'] != "avatars/avatar.png" && $request['avatar'] != null) {
            $path = $request->file('avatar')->store('avatars', 'public');
            Storage::delete($user->avatar);
            $data["avatar"] = $path;
        }else if($request['avatar_temp'] == "avatars/avatar.png"){
            $data["avatar"] = "avatars/avatar.png";
        }

        $user->update($data);
        return redirect("profile/edit");
    }

    public function reset_password()
    {
        $user = Auth::user();
        return view("page.profile.security.update_password", compact("user"));
    }
    
    public function do_reset_password(User $user, Request $request)
    {
        // dd($request["old_password"]);
        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['same:password'],
        ]);
        // dd(Hash::make($request['password']));
        $user->update(['password'=> Hash::make($request['password'])]);
        session()->flash('success', 'Reset password was successfull');
        return back();
    }

    public function user_role()
    {
        $user = Auth::user()->role;
        return response()->json([
            "user" => $user
        ]);
    }
}
