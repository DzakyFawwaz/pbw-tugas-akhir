<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public static function view()
    {

        $profile = DB::table('users')
            ->where('id', Auth::user()->id)
            ->first();

        return view('setting', [
            'profile' => $profile
        ]);
    }

    public static function update()
    {

        $user = User::find(Auth::user()->id);
        $validated = request()->validate([]);

        if (request('email')) {
            $validated = array_merge($validated, request()->validate([
                'email' => 'nullable|string|email|max:255|unique:users,email,' . Auth::user()->id,
            ]));
        }

        if (request('name')) {
            $validated = array_merge($validated, request()->validate([
                'name' => 'nullable|string|min:8',
            ]));
        }

        if (request('username')) {
            $validated = array_merge($validated, request()->validate([
                'username' => 'nullable|string',
            ]));
        }

        if (request('password')) {
            $validated = array_merge($validated, request()->validate([
                'password' => 'nullable|string|min:8|confirmed',
            ]));
            $user->password = bcrypt(request('password'));
        }

        if (array_key_exists('email', $validated)) {
            $user->email = request('email');
        }

        if (array_key_exists('name', $validated)) {
            $user->name = request('name');
        }

        if (array_key_exists('username', $validated)) {
            $user->username = request('username');
        }

        if (array_key_exists('password', $validated)) {
            $user->password = bcrypt(request('password'));
        }

        $user->save();



        return redirect()->route('setting');
    }
}
