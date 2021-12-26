<?php

namespace App\Http\Controllers;
use App\Models\SewaToko;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SewaTokoController extends Controller
{
    public function index(){
      $sewatoko = SewaToko::all();
     return view('sewatoko.index')->with('sewatoko', $sewatoko);
    }
    
    public function create(){
     return view('sewatoko.create');
    }

    public function insert(Request $request){
     $sewatoko=new SewaToko();
        $sewatoko->nama=$request->nama;
        $sewatoko->alamat=$request->alamat;
        $sewatoko->titik_kordinat=$request->titik_kordinat;
        $sewatoko->sewa_toko=$request->sewa_toko;
        $sewatoko->save();
     return redirect ('sewatoko');
    }
    public function delete($kode_toko){
        $sewatoko=SewaToko::find($kode_toko);
           $sewatoko->delete();
           return back();
       }
    public function edit($kode_toko){
        $sewatoko=SewaToko::find($kode_toko);
        return view('sewatoko.edit',compact('sewatoko'));
       }
   
       public function update(Request $request, $kode_toko){     
        $sewatoko = SewaToko::findOrFail($kode_toko);
        $sewatoko->nama=$request->get('nama');
        $sewatoko->alamat=$request->get('alamat');
        $sewatoko->titik_kordinat=$request->get('titik_kordinat');
        $sewatoko->sewa_toko=$request->get('sewa_toko');
           $sewatoko->save();
        return redirect ('sewatoko')->with('alert-success','Data berhasil Diubah.');
       }
    public function read($kode_toko){
        $sewatoko=SewaToko::find($kode_toko);
        return view('sewatoko.index',compact('sewatoko'));
       }
   
}
