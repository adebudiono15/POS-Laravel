<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = ['id','nama_supplier','kode_supplier'];
}