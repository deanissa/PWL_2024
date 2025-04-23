<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai_mahasiswa')->insert([
            [
                'mahasiswa_id' => 1,
                'matkul_id' => 1,
                'nilai' => 85.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mahasiswa_id' => 2,
                'matkul_id' => 2,
                'nilai' => 78.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mahasiswa_id' => 3,
                'matkul_id' => 3,
                'nilai' => 90.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
