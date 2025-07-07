<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthentication extends Controller
{
    public function login()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('user.dashboard');
        }
        return view('auth.user-login');
    }

    public function register()
    {
        return view('auth.user-registration');
    }

    public function userLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $remember = $request->filled('remember-me');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'No user account found with this email.'
            ])->withInput($request->only('email'));
        }

        if (Auth::guard('web')->attempt($credentials, $remember)) {
            return redirect()->route('user.dashboard');
        }

        return back()->with('toast', [
            'type' => 'error',
            'message' => 'Incorrect email or password'
        ]);

        // return redirect()->back()->with('error', 'Incorrect email or password');
    }

    public function userRegistration(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::insert([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('toast', [
            'type' => 'success',
            'message' => 'Account registered. redirecting...'
        ])->with('redirect', [
            'url' => route('login'),
            'delay' => 3000,
        ]);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();

        Auth::guard('user')->logout();

        if ($user) {
            $user->setRememberToken(null);
            $user->save();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
