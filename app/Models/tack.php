<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tack extends Model
{
    use HasFactory;

    protected $fillable = [
        'namee',
        'email',
        'userid',
        'tybe',
        'servesses',
        'phone',
    ];
}
