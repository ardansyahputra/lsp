<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('deskripsi')->nullable(); // Tambahkan kolom deskripsi
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
            $table->integer('kuantitas'); // Ubah dari 'kuantitas' ke 'stok' untuk konsistensi
            $table->integer('harga');
            $table->string('gambar')->nullable(); // Tambahkan kolom gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};