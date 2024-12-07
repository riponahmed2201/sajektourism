<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ResortController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\YoutubeController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//Login
Route::get('login', [AuthController::class, 'showLoginForm']);
Route::post('login', [AuthController::class, 'login'])->name('login');

//Frontend Routes
Route::get('resort', [HomeController::class, 'showResortPage']);
Route::get('daily-news', [HomeController::class, 'showDailyNewsPage']);
Route::get('tv-show', [HomeController::class, 'showTvShowPage']);
Route::get('youtube', [HomeController::class, 'showYoutubePage']);
Route::get('album', [HomeController::class, 'showAlbumPage']);
Route::get('package', [HomeController::class, 'showPackagePage']);
Route::get('about', [HomeController::class, 'showAboutPage']);
Route::get('contact', [HomeController::class, 'showContactPage']);

//Admin Route Here
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    // Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // Route::put('password/update', [AuthController::class, 'updatePassword'])->name('password.update');

    //Resources routes
    Route::group(['prefix' => 'admin'], function () {
        Route::resources([
            'services' => ServiceController::class,
            'resorts' => ResortController::class,
            'youtubes' => YoutubeController::class,
        ]);
    });
});
