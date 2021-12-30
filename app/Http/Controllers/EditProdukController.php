<?php

namespace App\Http\Controllers;
use App\Models\EditProduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditProdukController extends Controller
{
    public function index()
    {
     $editproduk=EditProduk::all();
        return view('editproduk.index')->with('editproduk', $editproduk);
    }
    
    public function create(){
     return view('editproduk.create');
    }

    public function insert(Request $request){
     $editproduk=new EditProduk();
        $editproduk->nama_produk=$request->nama_produk;
        $editproduk->satuan=$request->satuan;
        $editproduk->harga_jual=$request->harga_jual;
        $editproduk->stok_saat_ini=$request->stok_saat_ini;
        $editproduk->stok_minimal=$request->stok_minimal;
        $editproduk->foto_produk=$request->foto_produk;
        $editproduk->save();
     return redirect ('editproduk');
    }
    public function edit($kode_produk){
        $editproduk=EditProduk::find($kode_produk);
        return view('editproduk.edit',compact('editproduk'));
       }
   
       public function update(Request $request, $kode_produk){     
        $editproduk = EditProduk::findOrFail($kode_produk);
        $editproduk->nama_produk=$request->get('nama_produk');
        $editproduk->satuan=$request->get('satuan');
        $editproduk->harga_jual=$request->get('harga_jual');
        $editproduk->stok_saat_ini=$request->get('stok_saat_ini');
        $editproduk->stok_minimal=$request->get('stok_minimal');
        $editproduk->foto_produk=$request->get('foto_produk');
           $editproduk->save();
        return redirect ('editproduk')->with('alert-success','Data berhasil Diubah.');
       }
       public function delete($kode_produk){
         $editproduk=EditProduk::find($kode_produk);
            $editproduk->delete();
            return back();
        }
   
}
