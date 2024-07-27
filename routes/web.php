<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['verify.shopify'])->name('home');

Route::get('/', function () {
    return Inertia::render('Home', [
        'user' => Auth::user(),
    ]);
});


Route::get('login', [AuthenticateController::class, 'login'])->name('login');
Route::get('auth/callback', [AuthenticateController::class, 'callback']);
Route::get('authenticate/token', [AuthenticateController::class, 'token'])->name('authenticate.token');

Route::middleware(['jwt.auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
});