<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with([
            "details",
            "travel_package",
            "user",
        ])->get();
        // dd($transactions);
        return view("dashboard.transactions.index", compact("transactions"));
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
    public function show(Transaction $transaction)
    {
        $transaction = Transaction::with([
            "details",
            "travel_package",
            "user",
        ])->findOrFail($transaction->id);
        return view("dashboard.transactions.show", compact("transaction"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view("dashboard.transactions.edit", compact("transaction"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            "transaction_status" =>
                "required|string|in:IN_CART,PENDING,SUCCESS,CANCEL,FAILED",
        ]);
        $data = $request->all();
        $data["slug"] = Str::slug($request->title);
        $transaction->update($data);
        return redirect()
            ->route("transactions.index")
            ->with("toast_success", "Transaction Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return back()->with("toast_success", "Transaction Deleted");
    }
}
