<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedBook extends Model
{

    protected $table = 'saved_books';

    protected $fillable = [
        'user_id',
        'book_id',
    ];
}
