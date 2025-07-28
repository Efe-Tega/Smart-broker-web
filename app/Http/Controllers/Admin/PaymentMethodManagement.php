<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CryptoCurrency;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentMethodManagement extends Controller
{
    public function index(Request $request)
    {
        $currencies = CryptoCurrency::latest()->get();
        return view('admin.payment_method.index', compact('currencies'));
    }

    public function addPayment()
    {
        return view('admin.payment_method.add_payment');
    }

    public function savePayment(Request $request)
    {
        $request->validate([
            'crypto_name' => 'required|string',
            'short_name' => 'required|string',
            'wallet_address' => 'required|string',
            'network_type' => 'required',
            'status' => 'required',
        ]);

        $currencyName = $request->input('crypto_name');
        $cryptoCurrency = CryptoCurrency::where('name', $currencyName)->first();

        if ($cryptoCurrency) {
            return back()->withErrors([
                'crypto_name' => 'Crypto name already exist.'
            ])->withInput($request->only('crypto_name'));
        }

        CryptoCurrency::insert([
            'name' => $request->input('crypto_name'),
            'short_name' => $request->input('short_name'),
            'wallet_address' => $request->input('wallet_address'),
            'network_type' => $request->input('network_type'),
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Crypto added successfully'
        );

        return redirect('/admin/payment/method')->with($notification);
    }

    public function updatePayment(Request $request)
    {
        $request->validate([
            'crypto_name' => 'required|string',
            'short_name' => 'required|string',
            'wallet_address' => 'required',
            'network_type' => 'required',
            'status' => 'required'
        ]);

        $id = $request->input('id');
        $shortName = strtolower($request->input('short_name'));

        CryptoCurrency::findOrFail($id)->update([
            'name' => $request->input('crypto_name'),
            'short_name' => $shortName,
            'wallet_address' => $request->input('wallet_address'),
            'network_type' => $request->input('network_type'),
            'status' => $request->input('status'),
        ]);

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Updated!'
        );

        return redirect('/admin/payment/method')->with($notification);
    }

    public function editPayment($id)
    {
        $cryptoData = CryptoCurrency::find($id);
        return view('admin.payment_method.edit_payment', compact('cryptoData'));
    }

    public function deletePayment($id)
    {
        CryptoCurrency::find($id)->delete();
        return redirect()->back()->with('error', 'Payment method deleted');
    }
}
