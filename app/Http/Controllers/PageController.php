<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function privacy()
    {
        return view('pages.terms-and-privacy');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
