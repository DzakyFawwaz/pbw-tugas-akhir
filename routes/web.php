<?php

use Illuminate\Support\Facades\Route;

// Controller

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/signup', function () {
    return view('signup', ['title' => 'Buat Akun', 'header' => 'Buat Akun']);
})->name('signup');

Route::get('/dashboard', [DashboardController::class, 'showPage'])->name('dashboard');

Route::get('/book/{book_id}', [BookController::class, 'find'])->name('book');

Route::get('/encrypt/{id}', function ($id) {


    DB::table('users')
        ->where('id', $id)
        ->update(['password' => Hash::make('admin123')]);
});

// Route::get('/bookcreate', function () {

//     foreach (config('data.books') as $key => $book) {

//         $tags = is_array($book['tags']) ? implode(', ', $book['tags']) : $book['tags'];
//         $characters = is_array($book['characters']) ? implode(', ', $book['characters']) : $book['characters'];


//         Book::create([
//             'title' => str($book['title']),
//             'genre' => str($book['genre']),
//             'description' => str($book['description']),
//             'rating' => $book['rating'],
//             'author' => str($book['author']),
//             'synopsis' => str($book['synopsis']),
//             'cover_url' => $book['cover_url'],
//             'tags' => $tags,
//             'publication_date' => $book['publication_date'],
//             'number_of_pages' => $book['number_of_pages'],
//             'publisher' => str($book['publisher']),
//             'language' => str($book['language']),
//             'characters' => $characters,
//         ]);
//     }
// });

Route::get('/setting', [UserController::class, 'showPage'])->name('setting');
