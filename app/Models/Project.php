<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID',
        'title',
        'category',
        'target_label',
        'target',
        'progress',
        'image',
        'short_body',
        'body',
        'start_date',
        'end_date',
        'status'
    ];

}
