<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID',
        'title',
        'url',
        'category',
        'locale',
        'author',
        'picture',
        'excerpt',
        'body',
        'status'
    ];

}
