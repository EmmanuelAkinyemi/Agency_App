<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Investment;
use App\Models\User;
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

    public function auth(Request $request)
    {
        $formsFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formsFields)) {
            $request->session()->regenerate();

            return redirect('/admin/dashboard')->with('message', 'You are now logged in');
        }

        return back()->with(['error', 'Invalid Credentials']);
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function adminUsers()
    {
        return view('admin.users',[
            'users' => User::all()
        ]);
    }

    public function adminInvestments()
    {
        return view('admin.investments' ,[
            'investments' => Investment::all()
        ]);
    }

    public function adminProfile()
    {
        return view('admin.profile');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('login');
    }
}
