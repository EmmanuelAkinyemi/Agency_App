<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //shows the registration form
    public function create()
    {
        return view('auth.signup');
    }

    //creates new user
    public function store(Request $request)
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

        auth()->login($user);

        return redirect("/dashboard")->with('success', 'Registration Successful');
    }

    public function login()
    {
        return view('auth.signin');
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
