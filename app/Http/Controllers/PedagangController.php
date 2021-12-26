<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pedagang;

class PedagangController extends Controller
{
    public function index() 
    {
        $pedagang = Pedagang::all();
        return view('pedagang.index')->with('pedagang', $pedagang);
    }

    public function create() 
    {
        return view('pedagang.create');
    }

    public function pedagangg(Request $request) 
    {
        $pedagang = new Pedagang;
        $pedagang->nama=$request->nama;
        $pedagang->nomor_telepon=$request->nomor_telepon;
        $pedagang->alamat=$request->alamat;
        $pedagang->tanggal_lahir=$request->tanggal_lahir;
        $pedagang->no_ktp=$request->no_ktp;

        $pedagang->foto_ktp = $request->foto_ktp;
        $foto_ktp = $request->file('foto_ktp');
        $nama_file = $foto_ktp->getClientOriginalName();
        $foto_ktp->move('file_upload',$foto_ktp->getClientOriginalName());
        $pedagang->foto_ktp = $nama_file;


        $pedagang->data_pedagang=$request->data_pedagang;
        $pedagang->nomor_rekening=$request->nomor_rekening;

        $pedagang->foto_rekening=$request->foto_rekening;
        $pedagang->foto_rekening = $request->foto_rekening;
        $foto_rekening = $request->file('foto_rekening');
        $nama_file = $foto_ktp->getClientOriginalName();
        $foto_rekening->move('file_upload',$foto_rekening->getClientOriginalName());
        $pedagang->foto_rekening = $nama_file;

        $pedagang->status_pembayaran=$request->status_pembayaran;
        $pedagang->save();
        return redirect('pedagang');
    }
    public function edit($id_pedagang){
        $pedagang=Pedagang::find($id_pedagang);
        return view('pedagang.edit',compact('pedagang'));
       }
   
       public function update(Request $request, $id_pedagang){     
        $pedagang = Pedagang::findOrFail($id_pedagang);
        $pedagang->nama=$request->get('nama');
        $pedagang->nomor_telepon=$request->get('nomor_telepon');
        $pedagang->alamat=$request->get('alamat');
        $pedagang->tanggal_lahir=$request->get('tanggal_lahir');
        $pedagang->no_ktp=$request->get('no_ktp');
        $pedagang->foto_ktp=$request->get('foto_ktp');
        $pedagang->data_pedagang=$request->get('data_pedagang');
        $pedagang->foto_rekening=$request->get('foto_rekening');
        $pedagang->nomor_rekening=$request->get('nomor_rekening');
        $pedagang->status_pembayaran=$request->get('status_pembayaran');
           $pedagang->save();
        return redirect ('pedagang')->with('alert-success','Data berhasil Diubah.');
       }
    public function delete($id_pedagang)
    {
        $pedagang = Pedagang::find($id_pedagang);
        $pedagang -> delete();
        return redirect('pedagang');
    }

}
