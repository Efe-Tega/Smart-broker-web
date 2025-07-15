<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositManagement extends Controller
{
    public function index()
    {
        return view('admin.manage_deposit.index');
    }

    public function editDeposit()
    {
        return view('admin.manage_deposit.edit');
    }
}
