<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembelianLine extends Model
{
    protected $table = 'pembelian_line';
    protected $fillable = ['id','pembelian', 'nama','harga_beli','qty','grand_total','satuan_id'];

    public function barangs()
    {
        return $this->belongsTo('App\Models\Barang','barang');
    }
}
