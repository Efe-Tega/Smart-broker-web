<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthentication extends Controller
{
    public function adminLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        $remember = $request->filled('remember-me');

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            // Email not found
            return back()->withErrors([
                'email' => 'No admin account found with this email address.'
            ])->withInput($request->only('email'));
        }

        // Attempt Login
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }

        // Failed login
        return back()->withErrors([
            'password' => 'The password you entered is incorrect.'
        ])->withInput($request->only('email'));
    }

    public function adminDashboard(Request $request)
    {
        return view('admin.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin-login');
    }
}
