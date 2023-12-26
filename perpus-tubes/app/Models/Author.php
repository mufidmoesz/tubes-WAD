<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';

    protected $primaryKey = 'author_id';
    public function books() {
        return $this->belongsToMany(Book::class, 'book_authors', 'author_id', 'book_id')->using(BookAuthor::class);
    }

    protected $fillable = [
        'name',
        'birth_date',
        'about_author'
    ];

    protected $casts = [
        'birth_date' => 'date'
    ];
}
