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
        return view("pages.index", compact("home"));
    }
}
