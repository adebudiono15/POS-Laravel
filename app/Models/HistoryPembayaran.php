<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryPembayaran extends Model
{
    protected $table = 'history_pembayaran';
    protected $fillable = ['id','pembayaran','total_pembayaran'];
}
