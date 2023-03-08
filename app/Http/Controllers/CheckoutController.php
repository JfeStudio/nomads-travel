<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class CheckoutController extends Controller
{
    public function index(Request $request, $checkout)
    {
        $item = Transaction::with([
            "details",
            "travel_package",
            "user",
        ])->findOrFail($checkout);
        return view("pages.checkout", compact("item"));
    }

    public function process($checkout)
    {
        $travel_package = TravelPackage::findOrFail($checkout);
        // dd($travel_package);
        $transaction = Transaction::create([
            "travel_packages_id" => $checkout,
            "users_id" => auth()->user()->id,
            "additional_visa" => 0,
            "transaction_total" => $travel_package->price,
            "transaction_status" => "IN_CART",
        ]);

        // dd($transaction);
        TransactionDetail::create([
            "transactions_id" => $transaction->id,
            "name" => auth()->user()->name,
            "nationality" => "ID",
            "is_visa" => false,
            "doe_passport" => now()->addYears(5),
        ]);

        return redirect()->route("checkout", $transaction->id);
    }

    // public function remove($checkout)
    // {
    //     $transaction = Transaction::findOrFail($checkout);
    //     $transaction->delete();
    //     return redirect()
    //         ->route("checkout", $checkout)
    //         ->with("toast_success", "Checkout Deleted");
    // }

    public function create(Request $request, $checkout)
    {
        $request->validate([
            "name" => "required|string|exists:users,name",
            "is_visa" => "required|boolean",
            "doe_passport" => "required",
        ]);

        $data = $request->all();
        $data["transactions_id"] = $checkout;

        TransactionDetail::create($data);
        $transaction = Transaction::with([
            "details",
            "travel_package",
        ])->findOrFail($checkout);

        if ($request->is_visa) {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }
        $transaction->transaction_total += $transaction->travel_package->price;
        $transaction->save();
        return redirect()->route("checkout", $checkout);

        // return redirect()->route("checkout", $transaction->id);
    }
}
