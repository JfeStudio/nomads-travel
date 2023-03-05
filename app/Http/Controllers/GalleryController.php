<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::with("travel_package")->get();
        return view("dashboard.galleries.index", compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $travel_packages = TravelPackage::all();
        // dd($travel_packages);
        return view("dashboard.galleries.create", compact("travel_packages"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "travel_packages_id" =>
                "required|integer|exists:travel_packages,id",
            "image" => "required|image",
        ]);

        $data = $request->all();
        $data["image"] = $request
            ->file("image")
            ->store("assets/gallery", "public");
        // dd($data, $image);

        Gallery::create($data);
        return redirect()
            ->route("galleries.index")
            ->with("toast_success", "Gallery Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $travel_packages = TravelPackage::all();
        // dd($travel_packages, $gallery);
        return view(
            "dashboard.galleries.edit",
            compact("gallery", "travel_packages")
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            "travel_packages_id" =>
                "required|integer|exists:travel_packages,id",
            "image" => "nullable|image",
        ]);

        $data = $request->all();
        if ($request->file("image")) {
            Storage::delete("public/" . $gallery->image);
            $data["image"] = $request
                ->file("image")
                ->store("assets/gallery", "public");
        }
        $gallery->update($data);
        return redirect()
            ->route("galleries.index")
            ->with("toast_success", "Gallery Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        Storage::delete("public/" . $gallery->image);
        return back()->with("toast_success", "Gallery Deleted");
    }
}
