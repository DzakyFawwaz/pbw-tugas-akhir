<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'title',
        'genre',
        'description',
        'rating',
        'author',
        'synopsis',
        'cover_url',
        'tags',
        'publication_date',
        'number_of_pages',
        'publisher',
        'language',
        'characters',
    ];

    public static function find($book_id)
    {

        $books = static::all();
        return Arr::first($books, fn($book) => $book->id == $book_id);
    }
}
