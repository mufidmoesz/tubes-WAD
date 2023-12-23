<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookAuthor extends Pivot
{
    use HasFactory;

    protected $table = 'book_authors';

    protected $fillable = [
        'book_id',
        'author_id'
    ];

    public $timestamps = false;

    public function book() {
        return $this->belongsTo(Book::class, 'book_id', 'book_id');
    }

    public function author() {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }
}
