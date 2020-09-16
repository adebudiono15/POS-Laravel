<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class SatuanController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
        'nama_satuan' => 'required',
        ],
        [
        'nama_satuan.required' => 'Tidak Boleh Kosong',
        ]);
    }

    public function index(){
        $satuan = Satuan::get();

        return view('admin.master.satuan.index', compact('satuan'));
    }

    public function save(Request $request){
        // $this->_validation($request);
        $satuan = new Satuan;

        $satuan->nama_satuan = $request->nama_satuan;

        // dd($request->all());
        $satuan->save();
        Session::flash('success');
        return redirect('master-satuan');
    }

    public function delete($id){
        DB::table('satuan')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $satuan = Satuan::find($id);
        return view ('admin.master.satuan.edit', compact('satuan'));
    }

    public function update(Request $request, $id){
        Session::flash('update');
        Satuan::where('id', $id)->update([
          'nama_satuan' => $request->nama_satuan,
      ]);
    }
}
