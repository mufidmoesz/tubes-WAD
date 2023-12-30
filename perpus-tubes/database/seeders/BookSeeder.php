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
                'cover' => 'Hobbit_cover.jpeg',
                'isbn' => '978-0-618-34625-6',
                'publisher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'The Lord of the Rings',
                'year_released' => '1954',
                'description' => 'The Lord of the Rings is an epic high fantasy novel by the English author and scholar J. R. R. Tolkien. Set in Middle-earth, the world at some distant time in the past, the story began as a sequel to Tolkien\'s 1937 children\'s book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling books ever written, with over 150 million copies sold.',
                'cover' => 'x500_28f2a4bd-d1a6-49b4-b504-2ee8b7400c99_1200x1200.jpg',
                'isbn' => '978-0-720-34625-6',
                'publisher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'year_released' => '1997',
                'description' => 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, Harry faces an attempted comeback by the dark wizard Lord Voldemort',
                'cover' => '9780747532743-uk.jpg',
                'isbn' => '978-0-747-34625-6',
                'publisher_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Sebuah Seni Untuk Bersikap Bodo Amat',
                'year_released' => '2016',
                'description' => 'Novel yang berjudul Sebuah Seni Untuk Bersikap Bodo Amat bercerita tentang seseorang yang bernama Charles Bukowski yang mempunyai masa lalu yang kelam, suka mabuk-mabukan, berjudi, mempermainkan wanita, kasar, tukang utang dan seorang penyair. Dia bercita-cita menjadi seorang penulis terkenal namun karya-karyanya selalu ditolak oleh hampir disetiap majalah, jurnal-jurnal, surat kabar dan penerbit lainnya. Semua penerbit tersebut tidak mau menerbitkan karyanya dengan alasan tulisannya yang kasar, menjijikkan dan tidak bermoral.',
                'cover' => '39da0eb1-0087-4226-9413-d287a55b8a72.jpg',
                'isbn' => '978-0-06-245771-4',
                'publisher_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Speaker For The Dead',
                'year_released' => '1986',
                'description' => 'In "Speaker for the Dead", Ender is now an adult and has become a xenobiologist, studying alien life forms. He is sent to the planet Lusitania to investigate the death of the planet\'s human colony. Ender discovers that the colony was destroyed by a sentient alien species called the pequeninos, who are capable of communicating with humans through a form of telepathy.',
                'cover' => 'ff14c22f-d5d7-42b9-9dbb-4670a0a8cbf4.jpg',
                'isbn' => '978-0-312-93208-1',
                'publisher_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Going Postal',
                'year_released' => '2004',
                'description' => '"Going Postal" is a fantasy novel by the renowned author Terry Pratchett, published in 2004. It is the 33rd book in the "Discworld" series and the 26th novel to feature the character Moist von Lipwig. The story takes place in the fictional city of Ankh-Morpork, where Moist von Lipwig, a con artist and former conman, is sentenced to death for his crimes. However, he is given a chance to redeem himself by taking over the failing postal service of the city.',
                'cover' => '86acaaef-b80d-497b-a840-60ccfc867d5e.jpg',
                'isbn' => '978-0-061-13937-6',
                'publisher_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('books')->insert($books);
    }
}
