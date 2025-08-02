<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class websiteseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = [
            [
                'name' => 'Sikemas',
                'url' => 'https://sikemas.com',
                'type' => 'Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => 'Web Fakultas Ilmu Kesehatan',
                'url' => 'https://fikes.umtas.ac.id',
                'type' => 'web profile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('website')->insert($websites);
    }
}
