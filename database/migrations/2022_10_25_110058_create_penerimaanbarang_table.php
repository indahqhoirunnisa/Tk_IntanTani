<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaanbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaanbarang', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_produk');
            $table->string('nama_produk');
            $table->datetime('tanggal');
            $table->datetime('kadaluwarsa');
            $table->string('jumlah');
            $table->string('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaanbarang');
    }
}
