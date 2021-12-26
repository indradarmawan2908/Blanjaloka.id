<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokGudangController extends Controller
{
    public function index(){
     $data=StokGudang::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new StokGudang();
        $data->nama_produk=$request->get('nama_produk');
        $data->satuan=$request->get('satuan');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
        $data->nama_toko=$request->get('nama_toko');
        $data->save();
     return redirect ('/');
    }
    public function edit($id_stok_gudang){
        $data=StokGudang::find($id_stok_gudang);
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $id_stok_gudang){     
        $data = StokGudang::findOrFail($id_stok_gudang);
        $data->nama_produk=$request->get('nama_produk');
        $data->satuan=$request->get('satuan');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
        $data->nama_toko=$request->get('nama_toko');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
    public function read($id_stok_gudang){
        $data=StokGudang::find($id_stok_gudang);
        return view('read',compact('data'));
       }
   
}
