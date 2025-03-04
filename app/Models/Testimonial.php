<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID',
        'name',
        'role',
        'body',
        'phone',
        'email',
        'twitter',
        'linkedin',
        'status'
    ];

}
