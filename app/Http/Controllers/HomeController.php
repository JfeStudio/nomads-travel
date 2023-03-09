<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class HomeController extends Controller
{
    public function index()
    {
        $home = TravelPackage::with(["galleries"])->get();
        // foreach ($home as $item) {
        // loop details
        //     foreach ($item->details as $detail) {
        //         $item = $detail;
        //     }
        // }
        // dd($item);
        return view("pages.index", compact("home"));
    }
}
