<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'book_id';

    protected $fillable = [
        'title',
        'year_released',
        'description',
        'cover',
        'isbn',
        'publisher_id'
    ];

    public function publisher() {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'publisher_id');
    }

    public function author() {
        return $this->belongsToMany(Author::class, 'book_authors', 'book_id', 'author_id')->using(BookAuthor::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id')->using(BookCategory::class);
    }
}
