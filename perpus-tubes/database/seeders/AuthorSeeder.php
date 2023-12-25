<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $authors = [
            [
                'name' => 'J.K. Rowling',
                'birth_date' => '1965-07-31',
                'about_author' => 'Joanne Rowling CH, OBE, HonFRSE, FRCPE, FRSL, better known by her pen name J. K. Rowling, is a British author, philanthropist, film producer, television producer, and screenwriter. She is best known for writing the Harry Potter fantasy series, which has won multiple awards and sold more than 500 million copies, becoming the best-selling book series in history. The books are the basis of a popular film series, over which Rowling had overall approval on the scripts and was a producer on the final films. She also writes crime fiction under the pen name Robert Galbraith.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Stephen King',
                'birth_date' => '1947-09-21',
                'about_author' => 'Stephen Edwin King is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels. His books have sold more than 350 million copies, and many have been adapted into films, television series, miniseries, and comic books. King has published 61 novels, including seven under the pen name Richard Bachman, and five non-fiction books. He has written approximately 200 short stories, most of which have been published in book collections.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'J.R.R. Tolkien',
                'birth_date' => '1892-01-03',
                'about_author' => 'John Ronald Reuel Tolkien CBE FRSL was an English writer, poet, philologist, and academic. He was the author of the high fantasy works The Hobbit and The Lord of the Rings. He served as the Rawlinson and Bosworth Professor of Anglo-Saxon and Fellow of Pembroke College, Oxford, from 1925 to 1945 and Merton Professor of English Language and Literature and Fellow of Merton College, Oxford, from 1945 to 1959. He was at one time a close friend of C. S. Lewis—they were both members of the informal literary discussion group known as the Inklings. Tolkien was appointed a Commander of the Order of the British Empire by Queen Elizabeth II on 28 March 1972.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'George R. R. Martin',
                'birth_date' => '1948-09-20',
                'about_author' => 'George Raymond Richard Martin, also known as GRRM, is an American novelist and short story writer, screenwriter, and television producer. He is the author of the series of epic fantasy novels A Song of Ice and Fire, which was adapted into the Emmy Award-winning HBO series Game of Thrones.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Orson Scott Card',
                'birth_date' => '1951-08-24',
                'about_author' => 'Orson Scott Card is an American novelist, critic, public speaker, essayist, and columnist. He writes in several genres but is known best for science fiction. His novel Ender\'s Game and its sequel Speaker for the Dead both won Hugo and Nebula Awards, making Card the only author to win the two top American prizes in science fiction literature in consecutive years. A feature film adaptation of Ender\'s Game, which Card co-produced, was released in 2013.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Neil Gaiman',
                'birth_date' => '1960-11-10',
                'about_author' => 'Neil Richard MacKinnon Gaiman is an English author of short fiction, novels, comic books, graphic novels, nonfiction, audio theatre, and films. His works include the comic book series The Sandman and novels Stardust, American Gods, Coraline, and The Graveyard Book. He has won numerous awards, including the Hugo, Nebula, and Bram Stoker awards, as well as the Newbery and Carnegie medals. He is the first author to win both the Newbery and the Carnegie medals for the same work, The Graveyard Book (2008). In 2013, The Ocean at the End of the Lane was voted Book of the Year in the British National Book Awards.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Terry Pratchett',
                'birth_date' => '1948-04-28',
                'about_author' => 'Sir Terence David John Pratchett OBE was an English humorist, satirist, and author of fantasy novels, especially comical works. He is best known for his Discworld series of 41 novels. Pratchett\'s first novel, The Carpet People, was published in 1971. The first Discworld novel, The Colour of Magic, was published in 1983, after which Pratchett wrote an average of two books a year. His 2011 Discworld novel Snuff was at the time of its release the third-fastest-selling hardback adult-readership novel since records began in the UK, selling 55,000 copies in the first three days.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Douglas Adams',
                'birth_date' => '1952-03-11',
                'about_author' => 'Douglas Noel Adams was an English author, screenwriter, essayist, humorist, satirist and dramatist. Adams was author of The Hitchhiker\'s Guide to the Galaxy, which originated in 1978 as a BBC radio comedy before developing into a "trilogy" of five books that sold more than 5000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($authors as $author) {
            DB::table('authors')->insert($author);
        }
    }
}
