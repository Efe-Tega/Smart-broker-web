<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawalManagement extends Controller
{
    public function index()
    {
        return view('admin.manage_withdrawal.index');
    }
}
