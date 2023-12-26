<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            UserSeeder::class
        ]);

        $this->call([
            AuthorSeeder::class
        ]);

        $this->call([
            PublisherSeeder::class
        ]);

        $this->call([
            CategorySeeder::class
        ]);

        $this->call([
            BookSeeder::class
        ]);

        $this->call([
            BookAuthorSeeder::class
        ]);

        $this->call([
            BookCategorySeeder::class
        ]);
    }
}
