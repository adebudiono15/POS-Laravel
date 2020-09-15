<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id','no_struk','jumlah_bayar','grand_total','nama_customer','kode_customer','alamat','telepon','nama'];

    public function total_grand_total(){
        return $this->sum('grand_total');
     }
     
     public function lines(){
        return $this->hasMany('App\Models\PenjualanLine','penjualan');
     }
}
