<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Syafira Naila',
                'nim' => '123456789',
                'jurusan' => 'TRPL',
            ],
            [
                'nama' => 'Garneta Evana',
                'nim' => '987654321',
                'jurusan' => 'TRI',
            ],
            [
                'nama' => 'Jihan Amalia',
                'nim' => '112233445',
                'jurusan' => 'TRIK',
            ],
        ]);
    }
}
