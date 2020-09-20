<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjualanLine extends Model
{
    protected $table = 'penjualan_line';
    protected $fillable = ['id','nama_barang','nama_customer','satuan_id','harga','qty'];

    public function namas(){
        return $this->belongsTo('App\Models\Barang','nama');
    }

    public function nama_customer()
    {
        return $this->belongsTo(Penjualan::class);
    }
}
