<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // This is essential
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{

    protected $fillable = [
        'email',
        'password',
        'username',
        'fullname',
    ];

    use HasFactory, Notifiable;

    //
}
