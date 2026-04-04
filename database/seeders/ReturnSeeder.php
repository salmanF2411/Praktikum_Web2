<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ReturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loanDetails = DB::table('loan_detail')->where('is_return', true)->get();

        foreach ($loanDetails as $detail) {
            $charge = rand(0, 1);
            DB::table('returns')->insert([
                'loan_detail_id' => $detail->id,
                'charge' => $charge,
                'amount' => $charge === 1 ? rand(20000, 100000) : 0,
            ]);
        }
    }
}
