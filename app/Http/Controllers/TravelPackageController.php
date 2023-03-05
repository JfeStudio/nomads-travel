<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travels = TravelPackage::orderBy("id", "DESC")->get();
        return view("dashboard.travel-packages.index", compact("travels"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.travel-packages.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            "title" => "required|string",
            "location" => "required|string",
            "about" => "required|string",
            "featured_event" => "required|string",
            "language" => "required|string",
            "foods" => "required|string",
            "departure_date" => "required|date",
            "duration" => "required|string",
            "type" => "required|string",
            "price" => "required|integer",
        ]);

        if ($validation->fails()) {
            return back()
                ->with("toast_error", $validation->messages()->all()[0])
                ->withInput();
        }
        $data = $request->all();
        $data["slug"] = Str::slug($request->title);
        // dd($data);
        TravelPackage::create($data);
        return redirect()
            ->route("travel-packages.index")
            ->with("toast_success", "Travel Package Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(TravelPackage $travelPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TravelPackage $travelPackage)
    {
        return view("dashboard.travel-packages.edit", compact("travelPackage"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TravelPackage $travelPackage)
    {
        $validation = Validator::make($request->all(), [
            "title" => "required|string",
            "location" => "required|string",
            "about" => "required|string",
            "featured_event" => "required|string",
            "language" => "required|string",
            "foods" => "required|string",
            "departure_date" => "required|date",
            "duration" => "required|string",
            "type" => "required|string",
            "price" => "required|integer",
        ]);
        if ($validation->fails()) {
            return back()
                ->with("toast_error", $validation->messages()->all()[0])
                ->withInput();
        }
        $data = $request->all();
        $data["slug"] = Str::slug($request->title);
        $travelPackage->update($data);
        return redirect()
            ->route("travel-packages.index")
            ->with("toast_success", "Travel Package Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TravelPackage $travelPackage)
    {
        $travelPackage->delete();
        Alert::success("Success", "Travel Package Deleted");
        return back();
    }
}
