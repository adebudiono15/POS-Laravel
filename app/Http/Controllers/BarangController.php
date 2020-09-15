<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Support\Facades\DB;
use Session;

class BarangController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
        'kode_barang' => 'unique:barang',
        'nama_barang' => 'required',
        'satuan' => 'required',
        'harga' => 'required',
        ],
        [
        'nama.required' => 'Tidak Boleh Kosong',
        'nama_barang.required' => 'Tidak Boleh Kosong',
        'satuan.required' => 'Tidak Boleh Kosong',
        'kode_barang.unique' => 'Kode Barang Sudah Ada Silahkan Reload Halaman',
        ]);
    }

    public function index(){
        $barang = Barang::get();
        $satuan = Satuan::all();
        $kode = rand(001, 999);

        return view ('admin.master.barang.index', compact('barang','kode', 'satuan'));
    }

    public function save(Request $request){
        $this->_validation($request);
        $barang = new Barang;

        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->satuan = $request->satuan;
        $barang->harga = $request->harga;

        $barang->save();
        Session::flash('success');
        return redirect('master-barang');
        // dd($request->all());
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