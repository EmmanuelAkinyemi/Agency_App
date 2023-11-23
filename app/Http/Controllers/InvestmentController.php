<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    //create investment form
    public function create()
    {
        
        return view("admin.create-invest");
    }

    public function store_invest(Request $request)
    {
        $formsFields = $request->validate([
            'user_email' => 'required',
            'plan_type' => 'required',
            'deposit_amount' => 'required|min:3',
            'status' => 'required'
        ]);

        Investment::create($formsFields);

        return redirect("/admin/investments")->with('message', 'Registration Successful');
    }
}
