<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('adminlogin.login');
    }

    public function authLoginAttempt(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('home.index'))->with('message', 'Anda Berhasil Login');
        }

        return redirect()->back()->withInput()->with('message', 'Email atau Passwords Anda salah! Harap dicek kembali');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'))->with('message', 'Anda Berhasil Logout');
    }
}
