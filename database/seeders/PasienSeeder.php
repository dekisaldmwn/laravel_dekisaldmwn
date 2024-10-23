<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Bagas Setiadi',
            'alamat' => 'Jalan Cikaracak',
            'telepon' => '0123456789',
            'rumahsakit_id' => rand(1, 3)
        ]);

        Pasien::create([
            'nama' => 'Ahmad Steven',
            'alamat' => 'Jalan Cibatu',
            'telepon' => '9876543210',
            'rumahsakit_id' => rand(1, 3)
        ]);
    }
}
