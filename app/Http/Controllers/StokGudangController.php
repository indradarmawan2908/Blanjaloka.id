<?php

namespace App\Http\Controllers;
use App\Models\Stokgudang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokGudangController extends Controller
{
    public function index()
    {
      $stokgudang = Stokgudang::all();
        return view('stokgudang.view')->with('stokgudang', $stokgudang);
    }
    
    public function create(){
     return view('stokgudang.create');
    }

    public function insert(Request $request){
     $stokgudang=new Stokgudang();
        $stokgudang->nama_produk=$request->nama_produk;
        $stokgudang->satuan=$request->satuan;
        $stokgudang->stok_saat_ini=$request->stok_saat_ini;
        $stokgudang->stok_minimal=$request->stok_minimal;
        $stokgudang->nama_toko=$request->nama_toko;
        $stokgudang->save();
     return redirect ('stokgudang');
    }
    public function edit($id_stok_gudang){
        $stokgudang=Stokgudang::find($id_stok_gudang);
        return view('stokgudang.edit',compact('stokgudang'));
       }
   
       public function update(Request $request, $id_stok_gudang){     
        $stokgudang = StokGudang::findOrFail($id_stok_gudang);
        $stokgudang->nama_produk=$request->get('nama_produk');
        $stokgudang->satuan=$request->get('satuan');
        $stokgudang->stok_saat_ini=$request->get('stok_saat_ini');
        $stokgudang->stok_minimal=$request->get('stok_minimal');
        $stokgudang->nama_toko=$request->get('nama_toko');
           $stokgudang->save();
        return redirect ('stokgudang')->with('alert-success','Data berhasil Diubah.');
       }
       public function delete($id_stok_gudang){
         $stokgudang=Stokgudang::find($id_stok_gudang);
            $stokgudang->delete();
            return back();
        }
   
}
