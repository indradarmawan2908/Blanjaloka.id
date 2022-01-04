<?php

namespace App\Http\Controllers;
use App\Models\BahanMasakan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BahanMasakanController extends Controller
{
    public function index(){
     $bahanmasakan=BahanMasakan::all();
        return view('bahanmasakan.view')->with('bahanmasakan', $bahanmasakan);
    }
    
    public function create(){
     return view('bahanmasakan.create');
    }

    public function insert(Request $request){
     $bahanmasakan=new BahanMasakan();
        $bahanmasakan->resep_masakan=$request->resep_masakan;
        $bahanmasakan->nama_produk=$request->nama_produk;
        $bahanmasakan->satuan=$request->satuan;
        $bahanmasakan->harga_jual=$request->harga_jual;
        $bahanmasakan->stok_saat_ini=$request->stok_saat_ini;
        $bahanmasakan->save();
     return redirect ('bahanmasakan');
    }
    public function edit($id_masakan){
        $bahanmasakan=BahanMasakan::find($id_masakan);
        return view('bahanmasakan.edit',compact('bahanmasakan'));
       }
   
       public function update(Request $request, $id_masakan){     
        $bahanmasakan = BahanMasakan::findOrFail($id_masakan);
        $bahanmasakan->resep_masakan=$request->get('resep_masakan');
        $bahanmasakan->nama_produk=$request->get('nama_produk');
        $bahanmasakan->satuan=$request->get('satuan');
        $bahanmasakan->harga_jual=$request->get('harga_jual');
        $bahanmasakan->stok_saat_ini=$request->get('stok_saat_ini');
           $bahanmasakan->save();
        return redirect ('bahanmasakan')->with('alert-success','Data berhasil Diubah.');
       }
       public function delete($id_masakan){
         $bahanmasakan=BahanMasakan::find($id_masakan);
            $bahanmasakan->delete();
            return back();
        }
}
