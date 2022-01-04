<?php

namespace App\Http\Controllers;
use App\Models\BelanjaHarian;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BelanjaHarianController extends Controller
{
    public function index(){
     $belanjaharian=BelanjaHarian::all();
         return view('belanjaharian.view')->with('belanjaharian', $belanjaharian);
    }
    
    public function create(){
     return view('belanjaharian.create');
    }

    public function blanja(Request $request){
     $belanjaharian=new BelanjaHarian();
        $belanjaharian->nama_produk=$request->nama_produk;
        $belanjaharian->satuan=$request->satuan;
        $belanjaharian->harga_jual=$request->harga_jual;
        $belanjaharian->stok_saat_ini=$request->stok_saat_ini;
        $belanjaharian->stok_minimal=$request->stok_minimal;
        $belanjaharian->save();
     return redirect ('belanjaharian');
    }
    public function edit($kode_produk){
        $belanjaharian=BelanjaHarian::find($kode_produk);
        return view('belanjaharian.edit',compact('belanjaharian'));
       }
   
       public function update(Request $request, $kode_produk){     
        $belanjaharian = BelanjaHarian::findOrFail($kode_produk);
        $belanjaharian->nama_produk=$request->get('nama_produk');
        $belanjaharian->satuan=$request->get('satuan');
        $belanjaharian->harga_jual=$request->get('harga_jual');
        $belanjaharian->stok_saat_ini=$request->get('stok_saat_ini');
        $belanjaharian->stok_minimal=$request->get('stok_minimal');
           $belanjaharian->save();
        return redirect ('belanjaharian')->with('alert-success','Data berhasil Diubah.');
       }
       public function delete($kode_produk){
         $belanjaharian=BelanjaHarian::find($kode_produk);
            $belanjaharian->delete();
            return back();
        }
   
}
