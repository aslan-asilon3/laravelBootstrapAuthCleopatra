<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('produk_kode');
            $table->string('produk_nama')->default('produk');
            $table->integer('produk_harga')->default(0);
            $table->integer('produk_jumlah')->default(0);
            $table->string('produk_deskripsi');
            $table->string('produk_gambar')->default('produk.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
