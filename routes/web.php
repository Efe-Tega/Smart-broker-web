<?php

use App\Http\Controllers\Auth\AdminAuthentication;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// require base_path('routes/admin.php');
