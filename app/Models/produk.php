<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produks'; // Nama tabel

    // Jika 'kode_produk' adalah primary key
    protected $primaryKey = 'kode_produk'; // Menetapkan kolom 'kode_produk' sebagai primary key

    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'jumlah_produk',
    ];
}
