<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanLineController extends Controller
{
    protected $table = 'penjualan_line';
    protected $fillable = ['id','penjualan','nama','satuan_id','harga','qty','grand_total'];

    public function namas(){
        return $this->belongsTo('App\Models\Barang','nama');
    }
    
    public function nama_customer()
    {
        return $this->belongsTo(Penjualan::class);
    }

}
