<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin()
    {
        return view('auth.signin');
    }

    public function createUser(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect("/dashboard")->with('success', 'Registration Successful');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function loginUser(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials))
        {
            return redirect('/dashboard')->with('success', 'successfully logged in');
        }

        return back()->with('error', 'invalid credentials');
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('singin');
    }
}
