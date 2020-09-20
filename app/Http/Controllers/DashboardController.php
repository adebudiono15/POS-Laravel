<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use App\Models\PenjualanLine;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

       $tot_pendapat_hari_ini = Penjualan::whereDay('created_at', date('d'))->sum('grand_total');
       $tot_pendapat_bulanan = Penjualan::whereMonth('created_at', date('m'))->sum('grand_total');
       $tot_pendapat_tahunan = Penjualan::whereYear('created_at', date('Y'))->sum('grand_total');
        return view('admin.dashboard', compact('tot_pendapat_hari_ini','tot_pendapat_bulanan','tot_pendapat_tahunan'));
    }
}
