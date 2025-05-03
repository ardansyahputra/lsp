<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk', 
        'deskripsi', 
        'harga', 
        'kuantitas',  // Diubah dari 'kuantitas' ke 'stok' untuk konsistensi
        'kategori_id', 
        'gambar'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}