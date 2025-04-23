<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('matkul')->insert([
            [
                'nama' => 'Pemrograman Web',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Basis Data',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Algoritma dan Struktur Data',
                'sks' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
