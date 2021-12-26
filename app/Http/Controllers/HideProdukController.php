<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HideProdukController extends Controller
{
    public function index(){
     $data=HideProduk::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new HideProduk();
        $data->satuan=$request->get('satuan');
        $data->harga_jual=$request->get('harga_jual');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
        $data->nama_produk=$request->get('foto_produk');
        $data->save();
     return redirect ('/');
    }
    public function edit($id_produk){
        $data=HideProduk::find($id_produk);
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $id_produk){     
        $data = HideProduk::findOrFail($id_produk);
        $data->harga_jual=$request->get('harga_jual');
        $data->satuan=$request->get('satuan');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->stok_minimal=$request->get('stok_minimal');
        $data->foto_produk=$request->get('foto_produk');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
    public function read($id_produk){
        $data=HideProduk::find($id_produk);
        return view('read',compact('data'));
       }
   
}
