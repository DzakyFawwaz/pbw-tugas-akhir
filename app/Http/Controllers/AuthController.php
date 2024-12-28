<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('login', ['title' => "Login"]);
    }

    public function signup()
    {
        return view('signup', ['title' => "Buat Akun"]);
    }

    public function create()
    {

        $validated = request()->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required|string',
            'terms' => 'accepted',
        ]);

        User::create([
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]);

        $credentials = request()->only('email', 'password');

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', 'Akun berhasil dibuat.');
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', 'Login success.');
        }

        return back();
    }
}
