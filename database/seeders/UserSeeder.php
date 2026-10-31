<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin01',
                'full_name' => 'Adrian Cruz',
                'created_at' => now(),
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Patricia Lopez',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Bianca Reyes',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Daniel Santos',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier03',
                'full_name' => 'Kevin Ramos',
                'created_at' => now(),
            ],
        ]);
    }
}
