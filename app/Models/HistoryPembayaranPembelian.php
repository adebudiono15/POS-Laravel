<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryPembayaranPembelian extends Model
{
    protected $table = 'history_pembayaran_pembelian';
    protected $fillable = ['id','pembayaran','total_pembayaran'];
}
