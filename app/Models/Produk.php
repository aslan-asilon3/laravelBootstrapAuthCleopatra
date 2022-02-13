<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_kode',
        'produk_nama',
        'produk_harga',
        'produk_jumlah',
        'produk_deskripsi',
        'produk_gambar'
    ];

}
