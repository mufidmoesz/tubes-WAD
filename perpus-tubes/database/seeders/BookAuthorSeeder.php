<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $bookAuthors = [
            [
                'book_id' => 1,
                'author_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'book_id' => 1,
                'author_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'book_id' => 2,
                'author_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'book_id' => 3,
                'author_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('book_authors')->insert($bookAuthors);
    }
}
