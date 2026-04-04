<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category' => 'Petualangan'],
            ['category' => 'Misteri'],
            ['category' => 'Romantis'],
            ['category' => 'Fantasi'],
            ['category' => 'Fiksi Ilmiah'],
            ['category' => 'Thriller'],
            ['category' => 'Horror'],
            ['category' => 'Pendidikan'],
            ['category' => 'Biografi'],
            ['category' => 'Sejarah'],
        ];

        DB::table('categories')->insert($categories);
    }
}
