<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TravelPackageController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// auth

// Route::get("/", function () {
//     return view("welcome");
// });

Route::middleware(["auth", EnsureTokenIsValid::class])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard.index");
    })->name("dashboard");
});

Route::resource("travel-packages", TravelPackageController::class);
Route::resource("galleries", GalleryController::class);

Route::get("/", function () {
    return view("pages.index");
})->name("pages.index");

Route::get("/pages/detail", function () {
    return view("pages.show");
})->name("pages.show");

Route::get("/pages/detail/checkout", function () {
    return view("pages.checkout");
})->name("checkout");

Route::get("/success", function () {
    return view("pages.success");
})->name("success");
