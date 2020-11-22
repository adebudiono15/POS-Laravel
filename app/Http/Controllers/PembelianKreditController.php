<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Barang;
use App\Models\HistoryPembayaranPembelian;
use App\Models\Satuan;
use App\Models\Pembelian;
use App\Models\PembelianKredit;
use App\Models\PembelianKreditLine;
use Illuminate\Support\Facades\DB;
use Session;

use Illuminate\Http\Request;

class PembelianKreditController extends Controller
{
    public function index(){
        $supplier = Supplier::get();
        $barang = Barang::get();
        $satuan = Satuan::get();
        $pembelian_kredit = PembelianKredit::get();
        $firstInvoiceID = PembelianKredit::whereDay('created_at', date('d'))->count('id');
        $secondInvoiceID = $firstInvoiceID + 1;
        $kode = sprintf("%05d", $secondInvoiceID);
        
        return view('admin.master.pembeliankredit.index', compact('supplier', 'barang','pembelian_kredit','kode','satuan'));
    }

    public function pembelian(){
        $supplier = Supplier::get();
        $satuan = Satuan::get();
        $pembelian = Pembelian::get();
        
        $firstInvoiceID = PembelianKredit::whereDay('created_at', date('d'))->count('id');
        $secondInvoiceID = $firstInvoiceID + 1;
        $kode = sprintf("%05d", $secondInvoiceID);
        
        return view('admin.master.pembeliankredit.pembelian', compact('supplier','pembelian','kode','satuan'));
    }

    public function get_supplier($kode_Supplier)
    {
        $item = Supplier::where('kode_Supplier', $kode_Supplier)->first();

        return response()->json([
            'data' => $item
        ]);
    }

    public function get_barang($kode_Supplier){
        $supplier = Supplier::get();
        $satuan = Satuan::get();
        $firstInvoiceID = PembelianKredit::whereDay('created_at', date('d'))->count('id');
        $secondInvoiceID = $firstInvoiceID + 1;
        $kode = sprintf("%05d", $secondInvoiceID);
        $barang = Barang::where('nama_supplier_id', $kode_Supplier)->get();
        
        return view('admin.master.pembeliankredit.pembelian', compact('supplier', 'barang','kode','satuan','kode_Supplier'));
    }

    public function save(Request $request)
    {
        try {
           
            $barang = $request->barang;
            $qty = $request->qty;
            $harga_beli = $request->harga_beli;
            $no_struk = $request->no_struk;
            $nama_supplier = $request->nama_supplier;

            $id_pembelian = PembelianKredit::insertGetId([
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

                PembelianKreditLine::insert([
                    'pembelian_kredit' =>$id_pembelian,
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
                    
                $sum_total = PembelianKreditLine::where('pembelian_kredit', $id_pembelian)->sum('grand_total');

                PembelianKredit::where('id', $id_pembelian)->update([
                    'nama' => $barang,
                    'grand_total' => $sum_total,
                    'sisa' => $sum_total,
                ]);
            }
            // dd($request->all());
            \Session()->flash('success', 'Berhasil Melakukan Transaksi');
        } catch (\Expetion $e) {
            \Session()->flash('gagal', $e->getMessage());
        }
        return redirect('master-pembelian-kredit');
    }

    public function detail($id)
    {
        $pembelian_kredit = PembelianKredit::find($id);
        $title = date('dmYHis', strtotime($pembelian_kredit->created_at));
        $inv = $pembelian_kredit->no_struk;
        $nama = $pembelian_kredit->nama_supplier;

        return view('admin.master.pembeliankredit.detail', compact('pembelian_kredit', 'title', 'nama' ,'inv'));
    }

    public function update(Request $request, $id){
        try{

            $total_sisa = $request->total_sisa;
            $id_pembelian = $request->id_pembelian;
            $no_struk = $request->no_struk;

            $bayar = $request->bayar;
            $bayar = str_replace(["." , "Rp", " "], '', $bayar);
           
           $data['sisa'] = $total_sisa - $bayar;
           if ($bayar > $total_sisa) {
                \Session()->flash('lebih');
                return redirect()->back();
           }else{
                PembelianKredit::where('id', $id_pembelian)->update($data);

                HistoryPembayaranPembelian::insert([
                    'pembelian_kredit' =>$id_pembelian,
                    'total_pembayaran' =>  $bayar,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    
                ]);

                // dd($request->all());
                \Session()->flash('update');
           }
        }catch (\Expetion $e) {
            \Session()->flash('gagal', $e->getMessage());
        }

        return redirect()->back();
    }

    public function delete($id)
    {
    DB::table('pembelian_kredit')->where('id', $id)->delete();
    Session::flash('delete');
    return redirect()->back();
    }

    public function riwayatpembelian($id)
    {
        $pembelian_kredit = PembelianKredit::find($id);

        return view('admin.master.pembeliankredit.riwayat', compact('pembelian_kredit'));
    }
}
