<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->pluck('npm')->toArray();
        shuffle($users);
        $selectedUsers = array_slice($users, 0, min(30, count($users)));

        foreach ($selectedUsers as $userNpm) {
            $loanDate = now()->subDays(rand(1, 90));
            $returnDate = $loanDate->copy()->addDays(rand(7, 14));

            DB::table('loans')->insert([
                'user_npm' => $userNpm,
                'loan_at' => $loanDate,
                'return_at' => $returnDate,
                'created_at' => $loanDate,
                'updated_at' => now(),
            ]);
        }
    }
}
