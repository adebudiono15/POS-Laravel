<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id','kode_barang','nam_barang','satuan','harga' ,'supplier_id'];

    public function nama_supplier()
{
    return $this->belongsTo('App\Models\Supplier');
}
}
