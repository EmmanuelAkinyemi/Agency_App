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
