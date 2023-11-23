<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contact_mail_send(Request $request)
    {
        Mail::to('emmanuelakinyemi772@gmail.com')->send(new ContactMail($request));
        return redirect("contact");
    }

    public function privacy()
    {
        return view('pages.terms-and-privacy');
    }

    public function dashboard()
    {
        $user = Auth::user();

        // Retrieve investments for the authenticated user
        $investments = $user->investments;
        return view('user.dashboard', ['investments' => $investments]);
    }

    public function adminProfile()
    {
        return view('admin.profile');
    }
}
