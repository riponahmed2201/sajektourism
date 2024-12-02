<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

//Login
Route::get('login', [AuthController::class, 'showLoginForm']);
Route::post('login', [AuthController::class, 'login'])->name('login');

//Admin Route Here
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    // Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // Route::put('password/update', [AuthController::class, 'updatePassword'])->name('password.update');

});
