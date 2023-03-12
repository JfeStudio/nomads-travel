<?php

namespace App\Http\Controllers;

use App\Mail\TransactionSuccess;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        // dd($item);
        return view("pages.checkout", compact("item"));
    }

    public function process($checkout)
    {
        $travel_package = TravelPackage::findOrFail($checkout);
        // if (auth()->user()->id == $travel_package->users_id) {
        //     return redirect()->route("checkout", $checkout);
        // }
        $transaction = Transaction::create([
            "travel_packages_id" => $checkout,
            "users_id" => auth()->user()->id,
            "additional_visa" => 0,
            "transaction_total" => $travel_package->price,
            "transaction_status" => "IN_CART",
        ]);
        // dd($travel_package, $transaction);
        TransactionDetail::create([
            "transactions_id" => $transaction->id,
            "name" => auth()->user()->name,
            "nationality" => "ID",
            "is_visa" => false,
            "doe_passport" => now()->addYears(5),
        ]);
        // dd($transaction->id);
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
        // dd($data);

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
    }

    public function remove(Request $request, $checkout)
    {
        // $id = $request->id;
        $item = TransactionDetail::findOrFail($checkout);
        // dd();
        $transaction = Transaction::with([
            "details",
            "travel_package",
        ])->findOrFail($item->transactions_id);
        // dd($transaction);
        if ($item->is_visa) {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }
        $transaction->transaction_total -= $transaction->travel_package->price;
        $transaction->save();
        $item->delete();
        // dd($item->delete);
        return redirect()->route("checkout", $item->transactions_id);
    }

    public function success($checkout)
    {
        $transaction = Transaction::with([
            "user",
            "travel_package.galleries",
            "details",
        ])->findOrFail($checkout);
        $transaction->transaction_status = "PENDING";
        $transaction->save();
        // send email to user
        Mail::to($transaction->user)->send(
            new TransactionSuccess($transaction)
        );
        return view("pages.success");
    }
}
