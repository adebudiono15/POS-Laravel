<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\PembelianKredit;
use App\Models\Penjualan;
use App\Models\PenjualanKredit;
use App\Models\PenjualanLine;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // penjualan tunai
        $tot_pendapat_hari_ini = Penjualan::whereDay('created_at', date('d'))->sum('grand_total');
        $tot_pendapat_bulanan = Penjualan::whereMonth('created_at', date('m'))->sum('grand_total');
        $tot_pendapat_tahunan = Penjualan::whereYear('created_at', date('Y'))->sum('grand_total');
        $tot_transaksi_tahunan = Penjualan::count();
        
        // pembelian tunai
        $tot_pembelian_hari_ini = Pembelian::whereDay('created_at', date('d'))->sum('grand_total');
        $tot_pembelian_bulanan = Pembelian::whereMonth('created_at', date('m'))->sum('grand_total');
        $tot_pembelian_tahunan = Pembelian::whereYear('created_at', date('Y'))->sum('grand_total');
        $tot_transaksi_pembelian_tahunan = Pembelian::count();

        // penjualan kredit
        $tot_pendapat_kredit_hari_ini = PenjualanKredit::whereDay('created_at', date('d'))->sum('grand_total');
        $tot_pendapat_kredit_bulan_ini = PenjualanKredit::whereMonth('created_at', date('m'))->sum('grand_total');
        $tot_pendapat_kredit_tahun_ini = PenjualanKredit::whereYear('created_at', date('Y'))->sum('grand_total');
        $tot_piutang = PenjualanKredit::sum('sisa');

        // pembelian
        $tot_pembelian_kredit_hari_ini = PembelianKredit::whereDay('created_at', date('d'))->sum('grand_total');
        $tot_pembelian_kredit_bulan_ini = PembelianKredit::whereMonth('created_at', date('m'))->sum('grand_total');
        $tot_pembelian_kredit_tahun_ini = PembelianKredit::whereYear('created_at', date('Y'))->sum('grand_total');
        $tot_hutang = PembelianKredit::sum('sisa');



        return view('admin.dashboard', compact(
            'tot_pendapat_hari_ini',
            'tot_pendapat_bulanan',
            'tot_pendapat_tahunan',
            'tot_transaksi_tahunan',
            'tot_pembelian_hari_ini',
            'tot_pembelian_bulanan',
            'tot_pembelian_tahunan',
            'tot_transaksi_pembelian_tahunan',
            'tot_pendapat_kredit_hari_ini',
            'tot_pendapat_kredit_bulan_ini',
            'tot_pendapat_kredit_tahun_ini',
            'tot_piutang',
            'tot_pembelian_kredit_hari_ini',
            'tot_pembelian_kredit_bulan_ini',
            'tot_pembelian_kredit_tahun_ini',
            'tot_hutang'));
    }
}
