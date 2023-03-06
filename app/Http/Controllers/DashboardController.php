<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.index", [
            "travel_packages" => TravelPackage::count(),
            "transactions" => Transaction::count(),
            "pending_transactions" => Transaction::where(
                "transaction_status",
                "PENDING"
            )->count(),
            "success_transactions" => Transaction::where(
                "transaction_status",
                "SUCCESS"
            )->count(),
        ]);
    }
}
