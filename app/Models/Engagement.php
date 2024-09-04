<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'title',
        'community',
        'start_date',
        'end_date',
        'description',
        'status'
    ];
}
