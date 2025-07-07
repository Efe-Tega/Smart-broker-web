<?php

use App\Http\Controllers\Auth\UserAuthentication;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::controller(UserAuthentication::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});
