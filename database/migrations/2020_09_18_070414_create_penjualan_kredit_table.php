<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_kredit', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_struk');
            $table->string('nama_customer', 250);
            $table->bigInteger('kode_customer');
            $table->string('nama', 250);
            $table->bigInteger('grand_total');
            $table->bigInteger('sisa');
            $table->bigInteger('status');
            $table->bigInteger('jumlah_bayar');
            $table->text('alamat');
            $table->bigInteger('telepon');
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
        Schema::dropIfExists('penjualan_kredit');
    }
}
