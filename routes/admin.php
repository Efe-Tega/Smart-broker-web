<?php

use App\Http\Controllers\Admin\DepositManagement;
use App\Http\Controllers\Admin\InvestmentPlanManagement;
use App\Http\Controllers\Admin\PaymentMethodManagement;
use App\Http\Controllers\Admin\SettingsManagement;
use App\Http\Controllers\Admin\UserManagement;
use App\Http\Controllers\Admin\WithdrawalManagement;
use App\Http\Controllers\Auth\AdminAuthentication;
use Illuminate\Support\Facades\Route;

Route::controller(AdminAuthentication::class)->group(function () {
    Route::get('/admin-login', 'adminLogin');
    Route::post('/admin-login', 'login')->name('login');
});

Route::middleware('ensure.admin')->group(function () {

    // Authentication
    Route::controller(AdminAuthentication::class)->group(function () {
        Route::get('/admin/dashboard', 'adminDashboard')->name('admin.dashboard');
        Route::get('/admin/logout', 'adminLogout')->name('admin.logout');
    });

    Route::prefix('admin')->name('admin.')->group(function () {

        // User Management
        Route::controller(UserManagement::class)->group(function () {
            Route::get('/manage/user', 'manageUser')->name('manage.user');
            Route::get('/user/details/{id}', 'userDetails')->name('user.details');

            Route::post('/update_user', 'updateUser')->name('update.user');
        });

        // Investment Plan Management
        Route::controller(InvestmentPlanManagement::class)->group(function () {
            Route::get('/investment/plan', 'index')->name('invest.plan');
            Route::get('/add/plan', 'addPlan')->name('add.plan');
            Route::get('/edit/plan', 'editPlan')->name('edit.plan');
        });

        Route::controller(DepositManagement::class)->group(function () {
            Route::get('/manage_deposit', 'index')->name('manage.deposit');
        });

        Route::controller(WithdrawalManagement::class)->group(function () {
            Route::get('/manage_withdrawal', 'index')->name('manage.withdrawal');
        });

        // Settings
        Route::controller(SettingsManagement::class)->group(function () {
            Route::get('/settings', 'appSettings')->name('app.settings');
            // Route::get('/admin/payment/settings', 'paymentSettings')->name('payment.settings');
        });

        // Payment Methods Management
        Route::controller(PaymentMethodManagement::class)->group(function () {
            Route::get('payment/method', 'index')->name('payment.method');
            Route::get('edit/payment-method', 'editPayment')->name('edit.payment');
        });
    });
});
