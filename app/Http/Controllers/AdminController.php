<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function register()
    {
        return view('admin.signup');
    }

    public function login()
    {
        return view('admin.login');
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
