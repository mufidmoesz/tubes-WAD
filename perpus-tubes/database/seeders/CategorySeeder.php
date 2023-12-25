<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'category_name' => 'Fiction',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Non-Fiction',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Science',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Technology',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'History',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Biography',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Poetry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Fantasy',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Romance',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Horror',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Thriller',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Mystery',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Young Adult',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Children',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Comics',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Art',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Cooking',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
