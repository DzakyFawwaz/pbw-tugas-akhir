<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public static function find($book_id)
    {
        return view("book", ['book' => Book::find($book_id)]);
    }
}
