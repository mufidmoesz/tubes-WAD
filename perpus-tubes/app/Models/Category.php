<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name'
    ];

    public function books() {
        return $this->belongsToMany(Book::class, 'book_categories', 'category_id', 'book_id')->using(BookCategory::class);
    }
}
