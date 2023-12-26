<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $books = [
            [
                'title' => 'The Hobbit',
                'year_released' => '1937',
                'description' => 'The Hobbit, or There and Back Again is a children\'s fantasy novel by English author J. R. R. Tolkien. It was published on 21 September 1937 to wide critical acclaim, being nominated for the Carnegie Medal and awarded a prize from the New York Herald Tribune for best juvenile fiction. The book remains popular and is recognized as a classic in children\'s literature.',
                'cover' => 'https://upload.wikimedia.org/wikipedia/en/3/30/Hobbit_cover.JPG',
                'isbn' => '978-0-618-34625-6',
                'publisher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'The Lord of the Rings',
                'year_released' => '1954',
                'description' => 'The Lord of the Rings is an epic high fantasy novel by the English author and scholar J. R. R. Tolkien. Set in Middle-earth, the world at some distant time in the past, the story began as a sequel to Tolkien\'s 1937 children\'s book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling books ever written, with over 150 million copies sold.',
                'cover' => 'https://harpercollins.co.uk/cdn/shop/products/x500_28f2a4bd-d1a6-49b4-b504-2ee8b7400c99_1200x1200.jpg?v=1702458273',
                'isbn' => '978-0-720-34625-6',
                'publisher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'year_released' => '1997',
                'description' => 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, Harry faces an attempted comeback by the dark wizard Lord Voldemort',
                'cover' => 'https://pictures.abebooks.com/isbn/9780747532743-uk.jpg',
                'isbn' => '978-0-747-34625-6',
                'publisher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('books')->insert($books);
    }
}
