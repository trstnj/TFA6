<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '09171234567',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '09182345678',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email' => 'carlo.reyes@example.com',
                'phone' => '09193456789',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Angela Garcia',
                'email' => 'angela.garcia@example.com',
                'phone' => '09204567890',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Mark Mendoza',
                'email' => 'mark.mendoza@example.com',
                'phone' => '09215678901',
                'created_at' => now(),
            ],
        ]);
    }
}
