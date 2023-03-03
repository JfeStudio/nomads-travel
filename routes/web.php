<?php

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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", function () {
    return view("dashboard.index");
});

Route::get("/pages", function () {
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