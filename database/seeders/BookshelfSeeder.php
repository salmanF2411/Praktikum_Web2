<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookshelves = [
            ['code' => 'BS001', 'name' => 'Fiksi Umum'],
            ['code' => 'BS002', 'name' => 'Non-Fiksi'],
            ['code' => 'BS003', 'name' => 'Sains & Teknologi'],
            ['code' => 'BS004', 'name' => 'Sejarah & Biografi'],
            ['code' => 'BS005', 'name' => 'Seni & Budaya'],
            ['code' => 'BS006', 'name' => 'Sastra Indonesia'],
            ['code' => 'BS007', 'name' => 'Referensi'],
            ['code' => 'BS008', 'name' => 'Komik & Manga'],
        ];

        DB::table('bookshelf')->insert($bookshelves);
    }
}
