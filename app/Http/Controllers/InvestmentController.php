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

        return redirect("/admin/investments")->with('message', 'Investment Created Succefully');
    }

    public function edit(Investment $investment)
    {
        return view('admin.update-invest', compact('investment'));
    }

    public function update(Request $request, Investment $investment)
    {
        $request->validate([
            'plan_type' => 'required',
            'deposit_amount' => 'required|numeric',
            'status' => 'required'
            // Add other validation rules as needed
        ]);

        $investment->update($request->all());

        return redirect('/admin/investments')->with('message', 'Investment updated successfully.');
    }

    public function destroy(Investment $investment)
    {
        $investment->delete();

        return redirect('/admin/investments')->with('Message', 'Investment deleted successfully.');
    }
}
