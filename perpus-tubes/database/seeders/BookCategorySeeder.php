<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $bookCategories = [
            [
                'book_id' => 1,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'book_id' => 1,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'book_id' => 2,
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'book_id' => 3,
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('book_categories')->insert($bookCategories);
    }
}
