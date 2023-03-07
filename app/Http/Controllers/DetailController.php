<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $detail = TravelPackage::with(["galleries"])
            ->where("slug", $slug)
            ->firstOrFail();
        $date = $detail["departure_date"] = Carbon::create(
            $detail["departure_date"]
        )->format("F, d Y");
        return view("pages.show", [
            "detail" => $detail,
            "date" => $date,
        ]);
    }
}
