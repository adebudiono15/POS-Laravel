<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Customer;
use App\Models\HistoryPembayaran;
use App\Models\PenjualanKredit;
use App\Models\PenjualanKreditLine;
use App\Models\Satuan;
use Illuminate\Support\Facades\DB;
use Session;

use Illuminate\Http\Request;

class PenjualanKreditController extends Controller
{
    public function index(){
        
        $barang = Barang::get();
        $satuan = Satuan::get();
        $customer = Customer::get();
        $penjualan_kredit = PenjualanKredit::get();
        $kode = rand();
        return view('admin.master.penjualankredit.index', compact('barang','satuan','penjualan_kredit','kode','customer'));
    }



    public function save(Request $request)
    {
        try {
            $nama = $request->nama;
            $nama_customer = $request->nama_customer;
            $kode_customer = $request->kode_customer;
            $alamat = $request->alamat;
            $telepon = $request->telepon;
            $satuan_id = $request->satuan_id;
            $qty = $request->qty;
            $harga = $request->harga;

            \DB::transaction(function () use ($nama, $qty, $harga, $nama_customer, $satuan_id, $alamat, $telepon, $kode_customer) {
                $header = PenjualanKredit::insertGetId([
                    'no_struk' => rand(),
                    'nama_customer' => $nama_customer,
                    'alamat' => $alamat,
                    'telepon' => $telepon,
                    'kode_customer' => $kode_customer,
                    'status' => 1,
                    'created_at' => now(),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                foreach ($nama as $e => $nm) {
                    PenjualanKreditLine::insert([
                        'penjualan_kredit' => $header,
                        'nama' => $nm,
                        'harga' => $harga[$e],
                        'qty' => $qty[$e],
                        'satuan_id' => $satuan_id[$e],
                        'grand_total' => (int)$qty[$e] * (int) $harga[$e]
                    ]);

                    $dt = Barang::find($nm);
                    $qty_now = $dt->stock;
                    $qty_new = $qty_now - $qty[$e];
                    Barang::where('id', $nm)->update([
                        'stock'=>$qty_new
                    ]);
                }

                $sum_total = PenjualanKreditLine::where('penjualan_kredit', $header)->sum('grand_total');

                
                PenjualanKredit::where('id', $header)->update([
                    'nama' => $nama,
                    'grand_total' => $sum_total,
                    'sisa' => $sum_total,
                    ]);
                });
                
                // dd($request->all());
            \Session()->flash('success', 'Berhasil Melakukan Transaksi');
        } catch (\Expetion $e) {
            \Session()->flash('gagal', $e->getMessage());
        }

        return redirect()->back();
        
    }

    public function delete($id)
    {
    DB::table('penjualan_kredit')->where('id', $id)->delete();
    Session::flash('delete');
    return redirect()->back();
    }

    public function detail($id)
    {
        $penjualan_kredit = PenjualanKredit::find($id);
        $no_id = date('dmYHis', strtotime($penjualan_kredit->created_at));
        $no_struk = $penjualan_kredit->no_struk;
        $nama = $penjualan_kredit->nama_customer;

        return view('admin.master.penjualankredit.detail', compact('penjualan_kredit', 'no_struk', 'nama' ,'no_id'));
    }

    public function update(Request $request, $id){
        try{

            $total_sisa = $request->total_sisa;
            $bayar = $request->bayar;
            $id_penjualan = $request->id_penjualan;
            $no_struk = $request->no_struk;
           
           $data['sisa'] = $total_sisa - $bayar;
           if ($bayar > $total_sisa) {
               \Session()->flash('lebih');
               return redirect()->back();
           }else{
            PenjualanKredit::where('id', $id_penjualan)->update($data);

            HistoryPembayaran::insert([
                'penjualan_kredit' => $id_penjualan,
                'no_struk' =>$no_struk,
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

    public function riwayat($id)
    {
        $penjualan_kredit = PenjualanKredit::find($id);
        // dd($penjualan_kredit);
        return view('admin.master.penjualankredit.riwayat', compact('penjualan_kredit'));
    }
   
}
