<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // 🟢 Хүснэгтийн нэрийг заавал зааж өгнө
    // protected $table = 'adminbooks';

    protected $fillable = [
        'title',
        'author',
        'category',
        'cover_image',
        'published_date',
        'price',
        'pages',
        'description',
    ];
    protected $guarded = [];
}
