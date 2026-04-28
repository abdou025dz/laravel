<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Show the form
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

// Process the form
Route::post('/login', [AuthController::class, 'login']);

// Dashboard
Route::get('/home', [AuthController::class, 'home'])->name('home');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Root redirect
Route::get('/', function () {
    return redirect()->route('login');
});
