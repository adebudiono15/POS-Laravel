<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembelianKredit extends Model
{

    protected $table = 'pembelian_kredit';
    protected $fillable = ['id','no_struk', 'nama_supplier','nama','sisa','grand_total'];


    public function nama_supplier()
    {
        return $this->belongsTo('App\Models\Supplier');
    }

    public function lines()
    {
        return $this->hasMany('App\Models\PembelianKreditLine','pembelian_kredit');
    }
   
}
