<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Pembelian;
use App\Models\PembelianLine;
use Illuminate\Support\Facades\DB;
use Session;

class PembelianController extends Controller
{
    public function index(){
        $supplier = Supplier::get();
        $barang = Barang::get();
        $satuan = Satuan::get();
        $pembelian = Pembelian::WithCount('lines')->orderBy('created_at', 'desc')->get();
        $kode = rand();
        
        return view('admin.master.pembelian.index', compact('supplier', 'barang','pembelian','kode','satuan'));
    }

    public function pembelian(){
        $supplier = Supplier::get();
        $satuan = Satuan::get();
        $pembelian = Pembelian::get();
        $kode = rand();
        
        return view('admin.master.pembelian.pembelian', compact('supplier','pembelian','kode','satuan'));
    }

    public function get_barang($kode_Supplier){
        $supplier = Supplier::get();
        $satuan = Satuan::get();
        $kode = rand();
        $barang = Barang::where('nama_supplier_id', $kode_Supplier)->get();
        
        return view('admin.master.pembelian.pembelian', compact('supplier', 'barang','kode','satuan','kode_Supplier'));
    }

    public function get_supplier($kode_Supplier)
    {
        $item = Supplier::where('kode_Supplier', $kode_Supplier)->first();

        return response()->json([
            'data' => $item
        ]);
    }

    public function save(Request $request)
    {
        try {
           
            $barang = $request->barang;
            $qty = $request->qty;
            $harga_beli = $request->harga_beli;

            $no_struk = $request->no_struk;
            $nama_supplier = $request->nama_supplier;

            $id_pembelian = Pembelian::insertGetId([
                'no_struk' => $no_struk,
                'nama_supplier_id' => $nama_supplier,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            foreach ($qty as $e => $qt) {
                if ($qt == 0) {
                   continue;
                }

                $dt_barang = Barang::where('id', $barang[$e])->first();
                $harga_beli = $dt_barang->harga_beli;
                $grand_total = $qt * $harga_beli;
    
                PembelianLine::insert([
                    'pembelian' =>$id_pembelian,
                    'barang' => $barang[$e],
                    'qty' => $qty[$e],
                    'harga_beli' => $harga_beli,
                    'grand_total' => $grand_total,
                ]);

                $stock_barang = Barang::where('id', $barang[$e])->first();
                $qty_now = $stock_barang->stock;
                $qty_new = $qty_now + $qty[$e];
                Barang::where('id', $barang[$e])->update([
                    'stock'=>$qty_new
                ]);
                
            }

            // dd($request->all());
            \Session()->flash('success', 'Berhasil Melakukan Transaksi');
        } catch (\Expetion $e) {
            \Session()->flash('gagal', $e->getMessage());
        }

        return redirect('master-pembelian');
        
    }

    public function delete($id)
    {
    DB::table('pembelian')->where('id', $id)->delete();
    Session::flash('delete');
    return redirect()->back();
    }

    public function detail($id)
    {
        $pembelian = Pembelian::find($id);
        $title = date('dmYHis', strtotime($pembelian->created_at));
        $inv = $pembelian->no_struk;
        $nama = $pembelian->nama_supplier;

        return view('admin.master.pembelian.detail', compact('pembelian', 'title', 'nama' ,'inv'));
    }
}
