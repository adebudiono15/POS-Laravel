<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CustomerController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
        'kode_customer' => 'unique:customer',
        'nama' => 'required',
        'alamat' => 'required',
        ],
        [
        'nama.required' => 'Tidak Boleh Kosong',
        'alamat.required' => 'Tidak Boleh Kosong',
        'kode_customer.unique' => 'Kode Customer Sudah Ada Silahkan Reload Halaman',
        ]);
    }

    public function index(){
        $customer = Customer::get();
        $firstInvoiceID = Customer::count('id');
        $secondInvoiceID = $firstInvoiceID + 1;
        $kode = sprintf("%05d", $secondInvoiceID);
        return view ('admin.master.customer.index', compact('customer','kode'));
    }

    public function save(Request $request){
        $this->_validation($request);
        $customer = new Customer;

        $customer->kode_customer = $request->kode_customer;
        $customer->nama = $request->nama;
        $customer->telepon = $request->telepon;
        $customer->alamat = $request->alamat;

        $customer->save();
        Session::flash('success');
        return redirect('master-customer');
        // dd($request->all());
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view ('admin.master.customer.edit', compact('customer'));
    }


    public function update(Request $request, $id){
        Session::flash('update');
        Customer::where('id', $id)->update([
          'kode_customer' => $request->kode_customer,
          'nama' => $request->nama,
          'alamat' => $request->alamat,
          'telepon' => $request->telepon,
      ]);
    }


    public function delete($id){
        DB::table('customer')->where('id', $id)->delete();
        return redirect()->back();
    }

}
