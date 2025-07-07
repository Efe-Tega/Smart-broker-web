<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('backend.transactions.index');
    }

    public function viewDeposits()
    {
        return view('backend.transactions.deposit.index');
    }

    public function viewWithdrawals()
    {
        return view('backend.transactions.withdraw.index');
    }
}
