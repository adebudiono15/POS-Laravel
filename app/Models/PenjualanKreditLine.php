<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjualanKreditLine extends Model
{
    protected $table = 'penjualan_kredit_line';
    protected $fillable = ['id','penjualan_kredit','nama','satuan_id','qty','harga','grand_total','jumlah_bayar','sisa'];


    public function namas(){
        return $this->belongsTo('App\Models\Barang','nama');
    }
}
