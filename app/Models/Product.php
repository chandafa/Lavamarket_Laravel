<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeProduk',
        'namaProduk',
        'deskripsiProduk',
        'hargaProduk',
        'stokProduk',
        'gambarProduk',
        'kategoriProduk',
        'warnaProduk',
        'ukuranProduk',
    ];

    // Jika Anda ingin menambahkan beberapa accessor atau mutator, berikut adalah contohnya:

    // Accessor untuk format hargaProduk dengan simbol mata uang
    public function getHargaProdukAttribute($value)
    {
        // Konversi nilai ke float jika perlu
        $value = floatval($value);
        return 'Rp ' . number_format($value, 2, ',', '.');
    }


    // Mutator untuk menyimpan hargaProduk sebagai nilai numerik tanpa simbol mata uang
    public function setHargaProdukAttribute($value)
    {
        $this->attributes['hargaProduk'] = str_replace(['Rp ', '.', ','], '', $value);
    }

    // Relasi ke model kategori, jika ada (opsional)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategoriProduk', 'id');
    }
}