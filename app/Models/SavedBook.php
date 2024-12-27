<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedBook extends Model
{

    protected $fillable = [
        'user_id',
        'book_id',
    ];
}
