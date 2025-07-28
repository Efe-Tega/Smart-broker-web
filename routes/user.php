<?php

use App\Http\Controllers\Auth\UserAuthentication;
use App\Http\Controllers\Backend\InvestmentController;
use App\Http\Controllers\Backend\KycController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\TransactionController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::controller(UserAuthentication::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(KycController::class)->group(function () {
        Route::get('/kyc', 'index')->name('kyc');
    });

    Route::controller(TransactionController::class)->group(function () {
        Route::get('/wallet-address/{symbol}', 'getAddress');
        Route::get('/transaction-history', 'index')->name('transaction-history');
        Route::get('/deposits', 'viewDeposits')->name('deposit');
        Route::get('/withdraws', 'viewWithdrawals')->name('withdraws');

        Route::post('/submit-deposit', 'submitDeposit');
    });

    Route::controller(InvestmentController::class)->group(function () {
        Route::get('/investments', 'viewInvestments')->name('investments');
    });

    Route::controller(SettingsController::class)->group(function () {
        Route::get('/settings', 'settings')->name('settings');
    });
});
