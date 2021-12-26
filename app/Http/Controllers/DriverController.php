<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DriverController extends Controller
{
   public function index() 
   {
       $driver = Driver::all();
       return view('driver.index')->with('driver', $driver);
   }

   public function create() 
   {
       return view('driver.create');
   }

    public function drive(Request $request){
     $driver=new Driver();
        $driver->nama = $request->nama;
        $driver->nomor_telepon=$request->nomor_telepon;
        $driver->alamat=$request->alamat;
        $driver->tanggal_lahir=$request->tanggal_lahir;
        $driver->no_ktp=$request->no_ktp;
        $driver->foto_ktp=$request->foto_ktp;
        $driver->data_driver=$request->data_driver;
        $driver->kendaraan=$request->kendaraan;
        $driver->nomor_kendaraan=$request->nomor_kendaraan;
        $driver->foto_stnk=$request->foto_stnk;
        $driver->nomor_rekening=$request->nomor_rekening;
        $driver->foto_rekening=$request->foto_rekening;
        $driver->save();
        return redirect('driver');
    }
    public function delete($kode_driver){
      $driver=Driver::find($kode_driver);
         $driver->delete();
         return back();
     }
    public function edit($kode_driver){
        $driver=Driver::find($kode_driver);
        return view('driver.edit',compact('driver'));
       }
   
       public function update(Request $request, $kode_driver){     
        $driver = Driver::findOrFail($kode_driver);
        $driver->nama=$request->get('nama');
        $driver->nomor_telepon=$request->get('nomor_telepon');
        $driver->alamat=$request->get('alamat');
        $driver->tanggal_lahir=$request->get('tanggal_lahir');
        $driver->no_ktp=$request->get('no_ktp');
        $driver->foto_ktp=$request->get('foto_ktp');
        $driver->data_driver=$request->get('data_driver');
        $driver->kendaraan=$request->get('kendaraan');
        $driver->nomor_kendaraan=$request->get('nomor_kendaraan');
        $driver->foto_stnk=$request->get('foto_stnk');
        $driver->nomor_rekening=$request->get('nomor_rekening');
        $driver->foto_rekening=$request->get('foto_rekening');
           $driver->save();
        return redirect ('driver')->with('alert-success','Data berhasil Diubah.');
       }
   
       public function read($kode_driver){
        $driver=Driver::find($kode_driver);
        return view('driver.index',compact('driver'));
       }
   
}
