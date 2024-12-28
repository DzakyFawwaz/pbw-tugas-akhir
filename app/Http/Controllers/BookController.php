<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public static function find($book_id)
    {
        return view("book", ['book' => Book::find($book_id)]);
    }


    public static function view()
    {
        return view("addbook");
    }



    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'string|max:255',
            'genre' => 'string|max:255',
            'description' => 'nullable|string',
            'synopsis' => 'nullable|string',
            'cover_url' => 'required|url',
            'tags' => 'nullable|string',
            'publication_date' => 'nullable|date',
            'number_of_pages' => 'nullable|integer',
            'publisher' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'characters' => 'nullable|string',
        ]);

        $book = new Book($validatedData);

        $book->save();

        return redirect()->route('add-book')->with('success', 'Book created successfully.');
    }
}
