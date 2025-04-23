<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nama' => 'Ahmad Rasyid',
                'nim' => 'TI2023001',
                'jurusan' => 'Teknologi Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'nim' => 'TI2023002',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => 'TI2023003',
                'jurusan' => 'Teknik Komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
