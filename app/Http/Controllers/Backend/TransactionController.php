<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CryptoCurrency;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('backend.transactions.index');
    }

    public function viewDeposits()
    {
        $cryptoCurrency = CryptoCurrency::where('status', 'enable')->get();
        return view('backend.transactions.deposit.index', compact('cryptoCurrency'));
    }

    public function submitDeposit(Request $request)
    {
        return response()->json([
            'message' => 'Controller hit',
            'data' => $request->all(),
        ]);

        // return response()->json([
        //     'toast' => [
        //         'type' => 'success',
        //         'message' => 'Deposit submitted'
        //     ]
        // ]);

        // return back()->with('toast', [
        //     'type' => 'error',
        //     'message' => 'Incorrect email or password'
        // ]);
    }

    public function viewWithdrawals()
    {
        return view('backend.transactions.withdraw.index');
    }
}
