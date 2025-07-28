<?php

use App\Http\Controllers\Admin\DepositManagement;
use App\Http\Controllers\Admin\InvestmentPlanManagement;
use App\Http\Controllers\Admin\KycManagement;
use App\Http\Controllers\Admin\PaymentMethodManagement;
use App\Http\Controllers\Admin\SettingsManagement;
use App\Http\Controllers\Admin\UserManagement;
use App\Http\Controllers\Admin\WithdrawalManagement;
use App\Http\Controllers\Auth\AdminAuthentication;
use Illuminate\Support\Facades\Route;

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

        // KYC Management
        Route::controller(KycManagement::class)->group(function () {
            Route::get('/manage/kyc', 'index')->name('manage.kyc');
        });

        // Investment Plan Management
        Route::controller(InvestmentPlanManagement::class)->group(function () {
            Route::get('/investment/plan', 'index')->name('invest.plan');
            Route::get('/add/plan', 'addPlan')->name('add.plan');
            Route::get('/edit/plan', 'editPlan')->name('edit.plan');
        });

        Route::controller(DepositManagement::class)->group(function () {
            Route::get('/manage_deposit', 'index')->name('manage.deposit');
            Route::get('/edit-deposit/{id}', 'editDeposit')->name('edit-deposit');
            Route::get('/delete-deposit/{id}', 'deleteDeposit')->name('delete-deposit');

            Route::post('/update/deposit-status', 'updateDepositStatus')->name('update.deposit-status');
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
            Route::get('/payment/method', 'index')->name('payment.method');
            Route::get('/add/payment-method', 'addPayment')->name('add-paymnet');
            Route::get('edit/payment-method/{id}', 'editPayment')->name('edit.payment');
            Route::get('/delete-payment/{id}', 'deletePayment')->name('delete-payment');

            Route::post('/add/payment', 'savePayment')->name('save-payment');
            Route::post('/update-payment', 'updatePayment')->name('update-payment');
        });
    });
});
