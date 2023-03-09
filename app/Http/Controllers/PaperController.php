<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $papers = Transaction::with(["details", "travel_package", "user"])
            ->where("transaction_status", "PENDING" || "SUCCESS")
            ->orWhere("users_id", Auth::user()->id)
            ->get();
        // dd($papers);
        return view("pages.report.index", compact("papers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $report)
    {
        $report = Transaction::with([
            "details",
            "travel_package",
            "user",
        ])->findOrFail($report->id);
        // dd($report);
        return view("pages.report.show", compact("report"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
