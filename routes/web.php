<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login', ['title' => 'Masuk', 'header' => 'Selamat Datang
Kembali']);
});

Route::get('/signup', function () {
    return view('signup', ['title' => 'Buat Akun', 'header' => 'Buat Akun']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['books' => Book::all()]);
});
