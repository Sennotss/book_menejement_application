<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'description',
        'category_id',
        'genre_id',
        'author',
        'publisher_id',
        'publish',
        'price',
        'stock',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }

    public function stokIn(){
        return $this->hasMany(StokIn::class, 'book_id', 'id');
    }

    public function detail(){
        return $this->hasMany(Detail::class, 'book_id', 'id');
    }
}
