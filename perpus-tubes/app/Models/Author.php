<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    public function books() {
        return $this->belongsToMany(Book::class, 'book_authors')->using(BookAuthor::class);
    }

    protected $fillable = [
        'name',
        'birth_date',
        'about_author',
        'photo'
    ];

    protected $casts = [
        'birth_date' => 'date'
    ];
}
