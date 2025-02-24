<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{
    use HasFactory;

    protected $table = 'tech_stack';
    protected $fillable = [
        'userID',
        'name',
        'level',
        'status'
    ];
}
