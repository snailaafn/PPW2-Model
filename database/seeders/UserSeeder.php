<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Tambahkan ini
use Illuminate\Support\Facades\DB; // Untuk DB
use Illuminate\Support\Facades\Hash; // Untuk Hash


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'), // ganti dengan password yang diinginkan
                'email_verified_at' => now(),
                'level' => 'admin',
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('userpassword'), // ganti dengan password yang diinginkan
                'email_verified_at' => now(),
                'level' => 'user',
            ],
        ]);
    }
}
