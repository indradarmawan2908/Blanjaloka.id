<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarBelanjaController extends Controller
{
    public function index(){
     $data=DaftarBelanja::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new DaftarBelanja();
        $data->nama_produk=$request->get('nama_produk');
        $data->satuan=$request->get('satuan');
        $data->harga_jual=$request->get('harga_jual');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
        $data->save();
     return redirect ('/');
    }
    public function edit($kode_produk){
        $data=DaftarBelanja::find($kode_produk);
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $kode_produk){     
        $data = DaftarBelanja::findOrFail($kode_produk);
        $data->nama_produk=$request->get('nama_produk');
        $data->harga_jual=$request->get('harga_jual');
        $data->satuan=$request->get('satuan');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
    public function read($kode_produk){
        $data=DaftarBelanja::find($kode_produk);
        return view('read',compact('data'));
       }
   
}
