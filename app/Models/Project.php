<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID',
        'roleID',
        'title',
        'category',
        'link',
        'progress',
        'excerpt',
        'body',
        'picture',
        'status'
    ];

}
