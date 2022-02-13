<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProdukContohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produk_contohs')->insert([
            'title' => 'rinso',
            'category' => 'deterjen',
            'content' => 'contoh',
            'image' => 'iimage.png',
        ]);
    }
}
