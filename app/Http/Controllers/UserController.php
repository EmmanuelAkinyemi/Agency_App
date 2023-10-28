<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        $formsFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //hash password
        $formsFields['password'] = bcrypt($formsFields['password']);

        //create user
        $user = User::create($formsFields);


        return redirect("/dashboard")->with('success', 'Registration Successful');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function authenticate(Request $request)
    {
        $formsFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($formsFields))
        {
            $request->session()->regenerate();

            return redirect('/dashboard')->with('success', 'successfully logged in');
        }

        return back()->withErrors(['email', 'Invalid Credentials'])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('signin');
    }
}
