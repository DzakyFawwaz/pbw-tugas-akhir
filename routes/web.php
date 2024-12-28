<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Controller

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SavedBookController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'redirect'])
    ->name('dashboard');


// Login
Route::get('/login', [AuthController::class, 'login'])
    ->name('login')->middleware('guest');

// Sign Up
Route::get('/signup', [AuthController::class, 'signup'])
    ->name('signup');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'view'])
    ->name('dashboard');

// Protected
Route::middleware(['auth'])->group(function () {

    // Book Detail
    Route::get('/book/{book_id}', [BookController::class, 'find'])
        ->name('book');

    // Saved Book
    Route::get('/saved', [SavedBookController::class, 'view'])
        ->name('saved');

    // Setting
    Route::get('/setting', [UserController::class, 'view'])
        ->name('setting');

    // Setting
    Route::post('/setting', [UserController::class, 'update'])
        ->name('setting.update');
});



// ======================================================--

// Save a book
Route::post('/dashboard', [SavedBookController::class, 'save'])
    ->name('dashboard.save');

Route::post('/saved', [SavedBookController::class, 'save'])
    ->name('saved.save');


// Auth
Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('auth.login');

Route::post('/signup', [AuthController::class, 'create'])
    ->name('auth.signup');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
