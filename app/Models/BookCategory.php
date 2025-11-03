<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'description', 'category_id'];
    public function books()
    {
        return $this->hasMany(Book::class, 'category_id');
    }
}