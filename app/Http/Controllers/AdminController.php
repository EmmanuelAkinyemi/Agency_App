<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function register()
    {
        return view('admin.signup');
    }

    //creates new user
    public function store(Request $request)
    {
        $formsFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //hash password
        $formsFields['password'] = bcrypt($formsFields['password']);

        //create user
        $user = Admin::create($formsFields);

        auth()->login($user);

        return redirect("/admin/dashboard")->with('message', 'Registration Successful');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials))
        {
            return redirect('/admin/dashboard')->with('message', 'succesfully logged in');
        }

        return back()->with('error', 'Invalid Credentials');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function adminUsers()
    {
        return view('admin.users');
    }
}
