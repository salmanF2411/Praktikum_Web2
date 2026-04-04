<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $bookTitles = [
            'Laskar Pelangi',
            'Ayat-Ayat Cinta',
            'Negeri 5 Menara',
            'Bumi Manusia',
            'Anak Semua Bangsa',
            'Jejak Langkah',
            'Sang Pemimpi',
            'Pergi',
            'Supernova',
            'Pulau Buru',
            'Gadis Pantai',
            'Belenggu',
            'Siti Nurbaya',
            'Kakawin',
            'Pax Romana',
            'Filosofi Teras',
            'Atomic Habits',
            'The Power of Now',
            'Sapiens',
            'Thinking Fast and Slow',
            'Ketika Cinta Bertasbih',
            'Moga Bunda Doakan Aku',
            'Catatan Hati Seorang Istri',
            'Sebatang Pinang Menjadi Rumah Kami',
            'Meniti Asam Jawa',
            'Cermin Cinta',
            'Dia Adalah Dia',
            'Menggapai Mimpi',
            'Cinta di Setiap Langkah',
            'Harry Potter dan Batu Bertuah',
            'The Lord of the Rings',
            'A Game of Thrones',
            'The Hobbit',
            'Percy Jackson Series',
            'The Chronicles of Narnia',
            'Twilight Series',
            'The Hunger Games',
            'Divergent',
            'The Maze Runner',
            'Wings of Fire',
            'Warrior Cats',
            'Serangga Kecil',
            'Binatang Buas',
            'Petualangan di Hutan',
            'Misteri Pulau Terpencil',
            'Kode Rahasia',
            'Detektif Cilik',
            'Rumah Hantu',
            'Gerbang Lain Dunia',
        ];

        for ($i = 0; $i < 50; $i++) {
            $bookshelfId = ($i % 8) + 1; // 8 bookshelves
            $categoryId = ($i % 10) + 1; // 10 categories

            DB::table('books')->insert([
                'title' => $bookTitles[$i % count($bookTitles)] . ' ' . ($i + 1),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'publisher' => $faker->company(),
                'city' => $faker->city(),
                'cover' => null,
                'bookshelf_id' => $bookshelfId,
                'category_id' => $categoryId,
            ]);
        }
    }
}
