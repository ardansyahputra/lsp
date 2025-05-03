<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            'iPhone 13',
            'iPhone 13 Pro',
            'iPhone 14',
            'iPhone 14 Pro',
            'iPhone 15',
            'iPhone 15 Pro Max',
        ];

        foreach ($kategoris as $nama) {
            Kategori::create([
                'nama_kategori' => $nama,
            ]);
        }
    }
}
