<?php

use App\Http\Controllers\Auth\AdminAuthentication;
use Illuminate\Support\Facades\Route;

Route::controller(AdminAuthentication::class)->group(function () {
    Route::get('/admin-login', 'adminLogin');
    Route::post('/admin-login', 'login')->name('login');
});

Route::middleware('ensure.admin')->group(function () {

    Route::controller(AdminAuthentication::class)->group(function () {
        Route::get('/admin/dashboard', 'adminDashboard')->name('admin.dashboard');
    });
});
