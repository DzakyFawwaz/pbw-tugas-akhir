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
        $validated = request()->validate([
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'fullname' => 'nullable|string|min:8',
            'username' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
            $user->update($validated);
        } else {
            $user->update(array_filter($validated, function ($key) {
                return $key !== 'password';
            }, ARRAY_FILTER_USE_KEY));
        }

        return redirect()->route('setting');
    }
}
