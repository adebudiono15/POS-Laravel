<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
        'kode_supplier' => 'unique:supplier',
        'nama' => 'required',
        'alamat' => 'required',
        ],
        [
        'nama.required' => 'Tidak Boleh Kosong',
        'alamat.required' => 'Tidak Boleh Kosong',
        'kode_supplier.unique' => 'Kode Supplier Sudah Ada Silahkan Reload Halaman',
        ]);
    }

    public function index(){
        $supplier = Supplier::get();
        $firstInvoiceID = Supplier::count('id');
        $secondInvoiceID = $firstInvoiceID + 1;
        $kode = sprintf("%05d", $secondInvoiceID);

        return view('admin.master.supplier.index', compact('supplier','kode'));
    }

    public function save(Request $request){
        // $this->_validation($request);
        $supplier = new Supplier;

        $supplier->kode_supplier = $request->kode_supplier;
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->telepon = $request->telepon;
        $supplier->alamat = $request->alamat;

        // dd($request->all());
        $supplier->save();
        Session::flash('success');
        return redirect('master-supplier');
    }

    public function delete($id){
        DB::table('supplier')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view ('admin.master.supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id){
        Session::flash('update');
        Supplier::where('id', $id)->update([
          'kode_supplier' => $request->kode_supplier,
          'nama_supplier' => $request->nama_supplier,
          'alamat' => $request->alamat,
          'telepon' => $request->telepon,
      ]);
    }
}
