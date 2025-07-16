<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagement extends Controller
{
    public function manageUser()
    {
        $users = User::latest()->get();
        return view('admin.manage_user.index', compact('users'));
    }

    public function userDetails($id)
    {
        $user = User::findOrFail($id);
        return view('admin.manage_user.user_details', compact('user'));
    }
}
