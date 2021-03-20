<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackage;
use App\Transaction;


class DashboardController extends Controller
{
    public function index(request $request)
    {

        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDIG')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count()

        ]);
    }
}
