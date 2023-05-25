<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'descrbtion',
        'imgpath',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'blog_id','id');
    }
}
