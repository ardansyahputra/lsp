<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan folder penyimpanan gambar ada
        if (!Storage::exists('public/images/products')) {
            Storage::makeDirectory('public/images/products');
        }

        $produks = [
            [
                'nama_produk' => 'iPhone 13 256',
                'deskripsi' => 'iPhone 13 dengan layar Super Retina XDR, chip A15 Bionic, dan sistem kamera ganda.',
                'harga' => 7300000,
                'kuantitas' => 50,
                'kategori_id' => 1,
                'gambar' => 'ip13.jpg'
            ],
            [
                'nama_produk' => 'iPhone 13 Pro 128',
                'deskripsi' => 'iPhone 13 Pro dengan layar ProMotion, chip A15 Bionic, dan sistem kamera triple dengan zoom optik.',
                'harga' => 8900000,
                'kuantitas' => 30,
                'kategori_id' => 2,
                'gambar' => 'ip13p.jpg'
            ],
            [
                'nama_produk' => 'iPhone 14 512',
                'deskripsi' => 'iPhone 14 dengan fitur keselamatan penting, Deteksi Tabrakan, chip A15 Bionic yang andal.',
                'harga' => 9000000,
                'kuantitas' => 45,
                'kategori_id' => 3,
                'gambar' => 'ip14.jpg'
            ],
            [
                'nama_produk' => 'iPhone 14 Pro 256',
                'deskripsi' => 'iPhone 14 Pro dengan Dynamic Island, Always-On display, dan kamera 48MP untuk resolusi menakjubkan.',
                'harga' => 9999999,
                'kuantitas' => 35,
                'kategori_id' => 4,
                'gambar' => 'ip14pro.jpg'
            ],
            [
                'nama_produk' => 'iPhone 15 64',
                'deskripsi' => 'iPhone 15 dengan desain tahan lama, chip A16 Bionic, dan kamera utama 48MP.',
                'harga' => 10000000,
                'kuantitas' => 60,
                'kategori_id' => 5,
                'gambar' => 'ip15.jpg'
            ],
            [
                'nama_produk' => 'iPhone 15 Pro Max 1TB',
                'deskripsi' => 'iPhone 15 Pro Max dengan bahan titanium, chip A17 Pro, kamera 5x Telephoto, dan Action button.',
                'harga' => 11999999,
                'kuantitas' => 25,
                'kategori_id' => 6,
                'gambar' => 'ip15pm.jpg'
            ],
        ];

        foreach ($produks as $produk) {
            // Buat record produk terlebih dahulu
            $produkRecord = Produk::create([
                'nama_produk' => $produk['nama_produk'],
                'deskripsi' => $produk['deskripsi'],
                'harga' => $produk['harga'],
                'kuantitas' => $produk['kuantitas'],
                'kategori_id' => $produk['kategori_id'],
                'gambar' => $produk['gambar']
            ]);

            // Jika Anda ingin menyalin gambar dari folder seeder ke storage
            // $sourcePath = database_path('seeders/images/' . $produk['gambar']);
            // if (file_exists($sourcePath)) {
            //     $destinationPath = 'public/images/products/' . $produk['gambar'];
            //     Storage::put($destinationPath, file_get_contents($sourcePath));
            // }
        }
    }
}