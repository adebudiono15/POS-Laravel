<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjualanKredit extends Model
{
    protected $table = 'penjualan_kredit';
    protected $fillable = ['id','no_struk','jumlah_bayar','grand_total','nama_customer','kode_customer','alamat','telepon','nama','sisa'];

    public function lines(){
        return $this->hasMany('App\Models\PenjualanKreditLine','penjualan_kredit');
     }
}
