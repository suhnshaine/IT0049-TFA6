<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Shirealeth Acorda',
                'email' => 'scacorda@email.com',
                'phone' => '09123456789'
            ],
            [
                'full_name' => 'Gian Carlo Sarmiento',
                'email' => 'gcsarmiento@email.com',
                'phone' => '09234567890'
            ],
            [
                'full_name' => 'Darrel James Sanchez',
                'email' => 'djsanchez@email.com',
                'phone' => '09345678901'
            ],
            [
                'full_name' => 'Sarah Davis',
                'email' => 'sarah@email.com',
                'phone' => '09456789012'
            ],
            [
                'full_name' => 'Robert Wilson',
                'email' => 'robert@email.com',
                'phone' => '09567890123'
            ]
        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'System Administrator',
            ],
            [
                'username' => 'msantos',
                'full_name' => 'Maria Santos',
            ],
            [
                'username' => 'jcruz',
                'full_name' => 'Juan Cruz',
            ],
            [
                'username' => 'areyes',
                'full_name' => 'Ana Reyes',
            ],
            [
                'username' => 'mlopez',
                'full_name' => 'Mark Lopez',
            ]
        ]);
    }
}