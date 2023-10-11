<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisSampah;

class JenisSampahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Kertas',
                'deskripsi' => 'Kertas daur ulang',
                'foto' => 'kertas.jpg',
                'harga_per_kilogram' => 5000,
            ],
            [
                'nama' => 'Plastik',
                'deskripsi' => 'Plastik daur ulang',
                'foto' => 'plastik.jpg',
                'harga_per_kilogram' => 3000,
            ],
            // Tambahkan data jenis sampah lain sesuai kebutuhan
        ];

        JenisSampah::insert($data);
    }
}
