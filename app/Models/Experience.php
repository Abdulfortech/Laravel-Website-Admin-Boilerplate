<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'title',
        'organisation',
        'location',
        'start_date',
        'end_date',
        'description',
        'status'
    ];
}
