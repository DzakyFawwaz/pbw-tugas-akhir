<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public static function showPage()
    {


        return view('setting', ['profile' => User::all()]);
    }
}
