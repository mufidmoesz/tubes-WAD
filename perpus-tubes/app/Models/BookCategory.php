<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookCategory extends Pivot
{
    use HasFactory;

    protected $table = 'book_categories';

    protected $fillable = [
        'book_id',
        'category_id'
    ];
    
    public function book() {
        return $this->belongsTo(Book::class, 'book_id', 'book_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
