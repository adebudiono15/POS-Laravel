<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Penjualan;
use App\Models\PenjualanLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class PenjualanController extends Controller
{
    public function index(){
        $customer = Customer::get();
        $barang = Barang::get();
        $satuan = Satuan::get();
        $penjualan = Penjualan::get();
        $penjualan_line = penjualanLine::get();
        $kode = rand();

        return view('admin.master.penjualan.index', compact('customer', 'barang','penjualan','penjualan_line','kode','satuan'));
    }

    public function get_customer($kode_customer)
    {
        $item = Customer::where('kode_customer', $kode_customer)->first();

        return response()->json([
            'data' => $item
        ]);
    }

    public function get_barang($kode_barang)
    {
        $item = Barang::where('kode_barang', $kode_barang)->first();

        return response()->json([
            'data' => $item
        ]);
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
                $header = Penjualan::insertGetId([
                    'no_struk' => rand(),
                    'nama_customer' => $nama_customer,
                    'alamat' => $alamat,
                    'telepon' => $telepon,
                    'kode_customer' => $kode_customer,
                    'created_at' => now(),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                foreach ($nama as $e => $nm) {
                    PenjualanLine::insert([
                        'penjualan' => $header,
                        'nama' => $nm,
                        'harga' => $harga[$e],
                        'qty' => $qty[$e],
                        'satuan_id' => $satuan_id[$e],
                        'grand_total' => (int)$qty[$e] * (int) $harga[$e]
                    ]);
                }

                $sum_total = PenjualanLine::where('penjualan', $header)->sum('grand_total');


                Penjualan::where('id', $header)->update([
                    'nama' => $nama,
                    'grand_total' => $sum_total,
                ]);
            });

            \Session()->flash('success', 'Berhasil Melakukan Transaksi');
        } catch (\Expetion $e) {
            \Session()->flash('gagal', $e->getMessage());
        }

        // dd($request->all());
        return redirect()->back();
        
    }

    public function detail($id)
    {
        $penjualan = Penjualan::find($id);
        $title = date('dmYHis', strtotime($penjualan->created_at));
        $inv = $penjualan->no_struk;
        $nama = $penjualan->nama_customer;




        return view('admin.master.penjualan.detail', compact('penjualan', 'title', 'nama' ,'inv'));
    }

    public function delete($id)
    {
    DB::table('penjualan')->where('id', $id)->delete();
    Session::flash('delete');
    return redirect()->back();
    }
}

// public function show()
// {
//     $penjualan_tunai = PenjualanTunai::all();
//     $customer = Customer::get();
//     $harga = Harga::get();
//     $satuan = Satuan::get();
//     $sales_line = Sales_line::get();
//     $sales = Sales::get();
//     $kategori_customer = KategoriCustomer::get();
//     $barang = Barang::get();

//     $super_agen = $customer->where('kategori_id', 1);
//     $agen = $customer->where('kategori_id', 2);
//     $distributor = $customer->where('kategori_id', 3);
//     $reseller = $customer->where('kategori_id', 4);
//     $private = $customer->where('kategori_id', 5);
//     $vip = $customer->where('kategori_id', 6);


//     // dd($super_agen);


//     $sales = Sales::withCount('lines')->orderBy('created_at', 'desc')->get();


//     return view('admin.transaksi.tunai.penjualan', compact('super_agen', 'agen', 'distributor', 'reseller', 'private', 'sales', 'sales_line', 'penjualan_tunai', 'barang', 'harga', 'customer', 'kategori_customer', 'satuan', 'vip'));
// }

// public function transaksi()
// {
//     $customer = Customer::get();
//     $barang = Barang::get();
//     $harga = Harga::get();
//     $satuan = Satuan::get();
//     $kategori_customer = KategoriCustomer::get();
//     $transaksi_sementara = Transaksi::all();

//     return view('admin.transaksi.tunai.transaksi', compact('barang', 'harga', 'customer', 'kategori_customer', 'satuan', 'transaksi_sementara'));
// }

// public function get_barang($kode_barang)
// {
//     $brg = Barang::where('kode_barang', $kode_barang)->first();

//     return response()->json([
//         'data' => $brg
//     ]);
// }

// public function get_customer($kode_customer)
// {
//     $cst = Customer::where('kode_customer', $kode_customer)->first();

//     return response()->json([
//         'data' => $cst
//     ]);
// }






