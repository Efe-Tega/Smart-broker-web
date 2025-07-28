<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transactions;
use Illuminate\Http\Request;

class DepositManagement extends Controller
{
    public function index(Request $request)
    {
        $deposits = Transactions::where('trans_type', 'deposit')->get();
        return view('admin.manage_deposit.index', compact('deposits'));
    }

    public function editDeposit($id)
    {
        $deposit = Transactions::findOrFail($id);
        return view('admin.manage_deposit.edit', compact('deposit'));
    }

    public function updateDepositStatus(Request $request)
    {
        $id = $request->id;
        $statusUpdate = Transactions::findOrFail($id);
        $statusUpdate->status = $request->status;
        $statusUpdate->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Status Updated!'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteDeposit($id)
    {
        Transactions::findOrFail($id)->delete();
        return redirect()->back();
    }
}
