<?php

namespace App\Models;

class Book
{
    public static function all()
    {
        return config('data.books');
    }
}
