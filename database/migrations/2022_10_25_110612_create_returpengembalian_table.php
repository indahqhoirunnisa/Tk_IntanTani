<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturpengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returpengembalian', function (Blueprint $table) {
            $table->id();
            $table->string('id_produk');
            $table->string('id_pelanggan');
            $table->string('jumlah');
            $table->datetime('tgl_pesan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returpengembalian');
    }
}
