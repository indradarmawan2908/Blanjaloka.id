<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventDiskonController extends Controller
{
    public function index(){
     $data=EventDiskon::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new EventDiskon();
        $data->kalender=$request->get('nama');
        $data->deskripsi=$request->get('nomor_telepon');
        $data->produk_event=$request->get('alamat');
        $data->voucher_diskon=$request->get('tanggal_lahir');
        $data->toko_event=$request->get('no_ktp');
        $data->save();
     return redirect ('/');
    }
   
}
