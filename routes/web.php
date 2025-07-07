<?php

use App\Http\Controllers\Auth\AdminAuthentication;
use App\Http\Controllers\Auth\UserAuthentication;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});

// Admin Auth 
Route::controller(AdminAuthentication::class)->group(function () {
    Route::get('/admin-login', 'adminLogin');
    Route::post('/admin-login', 'login');
});

// User Auth
Route::controller(UserAuthentication::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register');

    Route::post('/login', 'userLogin')->name('user.login');
    Route::post('/register', 'userRegistration')->name('register');
});
