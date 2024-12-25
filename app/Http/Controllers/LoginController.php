<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function view()
    {
        return view('login', ['title' => "Login"]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cek autentikasi
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');
        }

        // Jika gagal login
        return back()->withErrors(['username' => 'Invalid credentials.'])->withInput();
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back();
        // ->withErrors([
        //     'login' => 'The provided credentials do not match our records.',
        // ])->onlyInput('login');
    }
}
