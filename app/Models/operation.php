<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surgery_tayp',
        'hospital',
        'section',
        'surgery_date',
       
        
    ];
}
