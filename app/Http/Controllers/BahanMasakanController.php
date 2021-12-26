<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanMasakanController extends Controller
{
    public function index(){
     $data=BahanMasakan::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new BahanMasakan();
        $data->resep_masakan=$request->get('resep_makanan');
        $data->satuan=$request->get('satuan');
        $data->harga_jual=$request->get('harga_jual');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
        $data->save();
     return redirect ('/');
    }
    public function edit($id_masakan){
        $data=BahanMasakan::find($id_masakan);
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $id_masakan){     
        $data = BahanMasakan::findOrFail($id_masakan);
        $data->resep_masakan=$request->get('resep_makanan');
        $data->satuan=$request->get('satuan');
        $data->harga_jual=$request->get('harga_jual');
        $data->stok_saat_ini=$request->get('stok_saat_ini');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
    public function read($id_masakan){
        $data=BahanMasakan::find($id_masakan);
        return view('read',compact('data'));
       }
   
}
