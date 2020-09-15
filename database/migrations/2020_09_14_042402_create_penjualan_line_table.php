<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_line', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penjualan');
            $table->bigInteger('nama_barang');
            $table->bigInteger('nama_customer');
            $table->bigInteger('satuan_id');
            $table->bigInteger('harga');
            $table->bigInteger('qty');
            $table->bigInteger('grand_total');
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
        Schema::dropIfExists('penjualan_line');
    }
}
