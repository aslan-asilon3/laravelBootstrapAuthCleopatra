<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('produks')->insert([
            'produk_kode' => 'BJ-32',
            'produk_nama' => 'Baju1',
            'produk_harga' => 50000,
            'produk_jumlah' => 4,
            'produk_deskripsi' => 'sold-out',
            'produk_gambar' => 'produk.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('produks')->insert([
            'produk_kode' => 'CL-51',
            'produk_nama' => 'Celana Jeans1',
            'produk_harga' => 150000,
            'produk_jumlah' => 2,
            'produk_deskripsi' => 'for-sale',
            'produk_gambar' => 'produk.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
