<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanKreditLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_kredit_line', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penjualan_kredit');
            $table->string('nama',250);
            $table->string('satuan',250);
            $table->bigInteger('qty');
            $table->bigInteger('harga');
            $table->bigInteger('grand_total');
            $table->bigInteger('jumlah_bayar');
            $table->bigInteger('sisa');
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
        Schema::dropIfExists('penjualan_kredit_line');
    }
}
