<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addcase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'sick',
        'midicine',
        'surgery',
        'healing',
        'notes',
    ];
}
