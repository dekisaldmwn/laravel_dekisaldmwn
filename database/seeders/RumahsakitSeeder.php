<?php

namespace Database\Seeders;

use App\Models\Rumahsakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahsakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rumahsakit::create([
            'nama' => 'Rumah Sakit A',
            'alamat' => 'Jalan Cigadung',
            'email' => 'rs_a@example.com',
            'telepon' => '0123456789'
        ]);

        Rumahsakit::create([
            'nama' => 'Rumah Sakit B',
            'alamat' => 'Jalan Paledang',
            'email' => 'rs_b@example.com',
            'telepon' => '9876543210'
        ]);

        Rumahsakit::create([
            'nama' => 'Rumah Sakit C',
            'alamat' => 'Jalan Sayang',
            'email' => 'rs_c@example.com',
            'telepon' => '9812832'
        ]);
    }
}
