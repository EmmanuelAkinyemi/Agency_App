<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    //create investment form
    public function create()
    {
        return view("admin.create-invest");
    }
}
