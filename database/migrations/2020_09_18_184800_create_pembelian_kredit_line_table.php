<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianKreditLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_kredit_line', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pembelian_kredit');
            $table->bigInteger('barang');
            $table->bigInteger('harga_beli');
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
        Schema::dropIfExists('pembelian_kredit_line');
    }
}
