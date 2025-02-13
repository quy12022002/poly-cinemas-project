<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'img_post',
        'description',
        'content',
        'is_active',
        'view_count',
    ];
    protected $casts = [
        'is_active'=>'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
