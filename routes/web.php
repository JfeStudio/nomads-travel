<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TravelPackageController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Models\Transaction;
use App\Models\TravelPackage;
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
    Route::get("/dashboard", [DashboardController::class, "index"])->name(
        "dashboard"
    );
    Route::resource("travel-packages", TravelPackageController::class);
    Route::resource("galleries", GalleryController::class);
    Route::resource("transactions", TransactionController::class);
});

Route::middleware("auth")->group(function () {
    Route::get("/checkout/{checkout}", [ CheckoutController::class, "index", ])->name("checkout");
    Route::post("/checkout/{checkout}", [
        CheckoutController::class,
        "process",
    ])->name("checkout-process");
    //route remove
    Route::delete("/checkout/{checkout}", [
        CheckoutController::class,
        "remove",
    ])->name("checkout-remove");
    Route::post("/checkout/create/{checkout}", [
        CheckoutController::class,
        "create",
    ])->name("checkout-create");
});

Route::get("/", [HomeController::class, "index"])->name("home");

Route::get("/pages/detail/{slug}", [DetailController::class, "index"])->name(
    "detail"
);

Route::get("/pages/detail/checkout", function () {
    return view("pages.checkout");
})->name("checkout");

Route::get("/success", function () {
    return view("pages.success");
})->name("success");
