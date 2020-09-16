<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class KategoriController extends Controller
{

    private function _validation(Request $request){
        $request->validate([
        'kategori' => 'required',
        ],
        [
        'kategori.required' => 'Tidak Boleh Kosong',
        ]);
    }

    public function index(){
        $kategori = Kategori::get();

        return view('admin.master.kategori.index', compact('kategori'));
    }

    public function save(Request $request){
        $this->_validation($request);
        $kategori = new Kategori;
        $kategori->kategori = $request->kategori;
      
        // dd($request->all());
        $kategori->save();
        Session::flash('success');
        return redirect('master-kategori');
    }

    public function delete($id){
        DB::table('kategori')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view ('admin.master.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id){
        Session::flash('update');
        Kategori::where('id', $id)->update([
          'kategori' => $request->kategori,
      ]);
    }
}
