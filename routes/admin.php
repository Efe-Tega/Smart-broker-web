<?php

use App\Http\Controllers\Auth\AdminAuthentication;
use Illuminate\Support\Facades\Route;

Route::controller(AdminAuthentication::class)->group(function () {
    Route::get('/admin-login', 'adminLogin');
    Route::get('/admin/dashboard', 'adminDashboard');

    Route::post('/admin-login', 'login')->name('login');
});
