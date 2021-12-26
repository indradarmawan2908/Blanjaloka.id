<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProdukController extends Controller
{
    public function index(){
     $data=EditProduk::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new EditProduk();
        $data->nama_produk=$request->get('nama_produk');
        $data->satuan=$request->get('satuan');
        $data->harga_jual=$request->get('harga_jual');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
        $data->foto_produk=$request->get('foto_produk');
        $data->save();
     return redirect ('/');
    }
    public function edit($kode_produk){
        $data=EditProduk::find($kode_produk);
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $kode_produk){     
        $data = EditProduk::findOrFail($kode_produk);
        $data->nama_produk=$request->get('nama_produk');
        $data->satuan=$request->get('satuan');
        $data->harga_jual=$request->get('harga_jual');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
        $data->foto_produk=$request->get('foto_produk');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
    public function read($kode_produk){
        $data=EditProduk::find($kode_produk);
        return view('read',compact('data'));
       }
   
}
