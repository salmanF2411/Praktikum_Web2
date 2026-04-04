<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class LoanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($loanId = 1; $loanId <= 30; $loanId++) {
            $numBooks = rand(1, 3);

            for ($j = 0; $j < $numBooks; $j++) {
                $bookId = rand(1, 50);

                DB::table('loan_detail')->insert([
                    'loan_id' => $loanId,
                    'book_id' => $bookId,
                    'is_return' => rand(0, 1),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
