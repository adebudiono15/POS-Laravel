<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Satuan;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Session;

class BarangController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
        'kode_barang' => 'unique:barang',
        'nama_barang' => 'required',
        'nama_supplier_id' => 'required',
        'satuan' => 'required',
        'harga' => 'required',
        ],
        [
        'nama_supplier_id.required' => 'Tidak Boleh Kosong',
        'nama_barang.required' => 'Tidak Boleh Kosong',
        'satuan.required' => 'Tidak Boleh Kosong',
        'kode_barang.unique' => 'Kode Barang Sudah Ada Silahkan Reload Halaman',
        ]);
    }

    public function index(){
        $barang = Barang::get();
        $satuan = Satuan::all();
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        $firstInvoiceID = Barang::count('id');
        $secondInvoiceID = $firstInvoiceID + 1;
        $kode = sprintf("%05d", $secondInvoiceID);

        return view ('admin.master.barang.index', compact('barang','kode', 'satuan','kategori','supplier'));
    }

    public function save(Request $request){
        $this->_validation($request);
        $barang = new Barang;

        $barang->nama_supplier_id = $request->nama_supplier_id;
        $barang->kode_barang = $request->kode_barang;
        $barang->stock = $request->stock;
        $barang->nama_barang = $request->nama_barang;
        $barang->satuan = $request->satuan;
        $barang->kategori = $request->kategori;
        $barang->harga = $request->harga;
        $barang->harga_beli = $request->harga_beli;

        // dd($request->all());
        $barang->save();
        Session::flash('success');
        return redirect('master-barang');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view ('admin.master.barang.edit', compact('barang'));
    }


    public function update(Request $request, $id){
        Session::flash('update');
        Barang::where('id', $id)->update([
          'kode_barang' => $request->kode_barang,
          'nama_barang' => $request->nama_barang,
          'satuan' => $request->satuan,
          'harga' => $request->harga,
      ]);
    }

    public function delete($id){
        DB::table('barang')->where('id', $id)->delete();
        return redirect()->back();
    }
}