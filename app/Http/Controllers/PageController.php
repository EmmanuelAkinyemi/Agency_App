<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Investment;
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

        // Total deposit
        $totalDeposit = Investment::where('user_email', $user->email)->sum('deposit_amount');

        // Active deposit
        $activeDeposit = Investment::where('user_email', $user->email)
            ->where('status', 'active')
            ->sum('deposit_amount');

        // Total withdrawal
        $totalWithdrawal = Investment::where('user_email', $user->email)
            ->where('status', 'closed') // Assuming 'closed' status indicates a withdrawal
            ->sum('deposit_amount');

            $totalProfit = Investment::where('user_email', $user->email)
            ->where('status', 'closed')
            ->sum(function ($investment) {
                // Calculate return based on the updated calculateReturn method
                $returnDetails = $investment->calculateReturn();

                if ($returnDetails) {
                    return $returnDetails['return'];
                }

                return 0;
            });

        return view('user.dashboard', compact('user', 'totalDeposit', 'activeDeposit', 'totalWithdrawal', 'totalProfit'));
    }

    private function getPercentageByPlanType($planType)
    {
        switch ($planType) {
            case 'basic':
                return 0.30;
            case 'gold':
                return 0.50;
            case 'masters':
                return 0.80;
            case 'premium':
                return 1.00;
            // Add more cases if needed...

            default:
                // Handle unsupported plan_type
                return 0;
        }
    }

    public function adminProfile()
    {
        return view('admin.profile');
    }
}
