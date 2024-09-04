<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'title',
        'url',
        'organization',
        'date',
        'description',
        'status'
    ];
}
