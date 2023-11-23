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
        // Calculate the total deposit
        $totalDeposit = Investment::sum('deposit_amount');

        // Count the total number of users with usertype 'user'
        $totalUsers = User::where('usertype', 'user')->count();

        // Count the total number of investments
        $totalInvestments = Investment::count();

        //pass the totals to the view
        return view('admin.dashboard', [
            'totalDeposit' => $totalDeposit,
            'totalUsers' => $totalUsers,
            'totalInvestments' => $totalInvestments,
        ]);
    }

    public function adminUsers()
    {
        $users = User::where('usertype', 'user')->with('investments')->get();
        return view('admin.users',['users' => $users]);
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
