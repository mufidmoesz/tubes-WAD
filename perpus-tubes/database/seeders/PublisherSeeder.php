<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $publishers = [
            [
                'publisher_name' => 'Penguin Random House',
                'publisher_address' => '1745 Broadway, New York, NY 10019, United States',
                'publisher_phone' => '+1 212-782-9000',
                'publisher_email' => 'penguinrandom@gmail.com',
                'publisher_website' => 'www.penguinhouse.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'publisher_name' => 'HarperCollins',
                'publisher_address' => '195 Broadway, New York, NY 10007, United States',
                'publisher_phone' => '+1 212-207-7000',
                'publisher_email' => 'harpercollins@gmail.com',
                'publisher_website' => 'www.harpercollins.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'publisher_name' => 'Simon & Schuster',
                'publisher_address' => '1230 Avenue of the Americas, New York, NY 10020, United States',
                'publisher_phone' => '+1 212-698-7000',
                'publisher_email' => 'simonschuster@yahoo.com',
                'publisher_website' => 'www.simonandschuster.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'publisher_name' => 'Hachette Livre',
                'publisher_address' => '43 Quai de Grenelle, 75015 Paris, France',
                'publisher_phone' => '+33 14-392-3000',
                'publisher_email' => 'hachette@gmail.com',
                'publisher_website' => 'www.hachette.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'publisher_name' => 'Macmillan Publishers',
                'publisher_address' => '120 Broadway, New York, NY 10271, United States',
                'publisher_phone' => '+1 646-307-5151',
                'publisher_email' => 'macmillan@hotmail.com',
                'publisher_website' => 'www.macmillan.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'publisher_name' => 'Holtzbrinck Publishing Group',
                'publisher_address' => '175 5th Ave, New York, NY 10010, United States',
                'publisher_phone' => '+1 646-307-5151',
                'publisher_email' => 'holtzbrinck@gmail.com',
                'publisher_website' => 'www.holtzbrinck.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($publishers as $publisher) {
            DB::table('publishers')->insert($publisher);
        }
    }
}
