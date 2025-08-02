<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class informasiseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $informasi = [
            [
                'judul' => 'Informasi Pertama',
                'deskripsi' => 'Deskripsi untuk informasi pertama.',
                'gambar' => 'informasi1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Informasi Kedua',
                'deskripsi' => 'Deskripsi untuk informasi kedua.',
                'gambar' => 'informasi2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('informasi')->insert($informasi);
    }
}
