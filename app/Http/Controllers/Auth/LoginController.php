<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Login menggunakan guard admin
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard'); // arahkan ke dashboard admin
        }

        return back()->withErrors([
            'email' => 'Login gagal, email atau password salah.'
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Logout juga pakai guard admin
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
