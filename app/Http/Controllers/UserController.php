<?php

namespace App\Http\Controllers;

use App\Mail\WithdrawalMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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
            'usertype' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //hash password
        $formsFields['password'] = bcrypt($formsFields['password']);

        //create user
        $user = User::create($formsFields);

        auth()->login($user);

        return redirect("/dashboard")->with('message', 'Registration Successful');
    }

    public function login()
    {
        return view('auth.signin');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful

            // Get the authenticated user
            $user = Auth::user();

            // Check the user type
            if ($user->usertype === 'admin') {
                // Redirect to admin dashboard
                return redirect('admin/dashboard');
            } elseif ($user->usertype === 'user') {
                // Redirect to user dashboard
                return redirect('/dashboard');
            }
        }

        return back()->with('error', 'Invalid Credentials');
    }

    public function withdrawal()
    {
        return view("user.withdrawal");
    }

    public function withdrawal_mail_send(Request $request)
    {
        Mail::to('emmanuelakinyemi772@gmail.com')->send(new WithdrawalMail($request));
        return redirect("/withdrawal");
    }

    public function deposit()
    {
        return view("user.deposit");
    }

    public function deposit_mail_send(Request $request)
    {
        Mail::to('emmanuelakinyemi772@gmail.com')->send(new WithdrawalMail($request));
        return redirect("/deposit");
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check if the current password matches the one in the database
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the user's password
        $user->update(['password' => Hash::make($request->input('new_password'))]);

        return redirect('/admin/profile')->with('message', 'Password updated successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
