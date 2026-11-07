<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public page
Route::get('/', function () {
    return view('index');
})->name('home');

// Guests only (logged-out users)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Logged-in users only
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Example protected page (your project has no CRUD yet, so this shows the auth middleware working)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});