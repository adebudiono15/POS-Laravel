<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PembelianLine;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $fillable = ['id','no_struk', 'nama_supplier'];

    public function nama_supplier()
    {
        return $this->belongsTo('App\Models\Supplier');
    }

    public function lines()
    {
        return $this->hasMany('App\Models\PembelianLine','pembelian');
    }
    public function grand_total()
    {
       $pembelian = $this->id;
       $total = PembelianLine::where('pembelian', $pembelian)->sum('grand_total');
       return $total;
    }
}
