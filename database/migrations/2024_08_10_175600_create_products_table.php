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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID Produk (Auto Increment)
            $table->string('codeProduk'); // Code Produk
            $table->string('namaProduk'); // Nama Produk
            $table->text('deskripsiProduk'); // Deskripsi Produk
            $table->decimal('hargaProduk', 10, 2); // Harga Produk dengan 2 desimal (misalnya 10000.00)
            $table->integer('stokProduk'); // Stok Produk
            $table->string('gambarProduk'); // URL atau path gambar produk
            $table->enum('kategoriProduk', ['Baju', 'Sepatu', 'Celana', 'Tas']); // Kategori Produk dengan enum
            $table->string('warnaProduk'); // Warna Produk
            $table->string('ukuranProduk'); // Ukuran Produk
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};