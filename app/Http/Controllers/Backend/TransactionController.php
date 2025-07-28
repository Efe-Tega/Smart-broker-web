<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CryptoCurrency;
use App\Models\Transactions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        return view('backend.transactions.index');
    }

    public function getAddress($symbol)
    {
        $wallet = CryptoCurrency::where('short_name', $symbol)->first();

        if (!$wallet) {
            return response()->json(['error' => 'Wallet not found'], 404);
        }

        return response()->json([
            'address' => $wallet->wallet_address,
            'symbol' => $wallet->short_name
        ]);
    }

    public function viewDeposits()
    {
        $cryptoCurrency = CryptoCurrency::where('status', 'enable')->get();
        $deposits = Transactions::where('trans_type', 'deposit')->get();
        return view('backend.transactions.deposit.index', compact('cryptoCurrency', 'deposits'));
    }

    public function submitDeposit(Request $request)
    {
        $request->validate([
            'crypto_currency' => 'required|string',
            'usd_amount' => 'required|numeric',
            'crypto_amount' => 'required|numeric',
            'wallet_address' => 'required|string',
            'transaction_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $trans_id = "TRX" . uniqid();
        $user = Auth::user();

        // Handle image upload
        if ($request->hasFile('transaction_image')) {
            $imagePath = $request->file('transaction_image')->store('receipts', 'public');
        } else {
            return response()->json(['message' => 'Transaction image is required.'], 422);
        }

        // Save deposit data
        $deposit = Transactions::create([
            'user_id' => $user->id, // assuming user is authenticated
            'crypto_currency_id' => $request->currency_id,
            'amount' => $request->usd_amount,
            'crypto_value' => $request->crypto_amount,
            'transaction_image' => $imagePath,
            'trans_id' => $trans_id,
            'trans_type' => 'deposit',
            'status' => 'pending', // or whatever status you use
            'created_at' => Carbon::now(),
        ]);

        return response()->json([
            'message' => 'Deposit successful',
            'data' => $deposit,
        ]);
    }

    public function viewWithdrawals()
    {
        return view('backend.transactions.withdraw.index');
    }
}
