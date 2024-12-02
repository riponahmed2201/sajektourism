<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.dashboard');
});

//Login
// Route::get('/', [AuthController::class, 'showLoginForm']);
// Route::post('login', [AuthController::class, 'login'])->name('login');
