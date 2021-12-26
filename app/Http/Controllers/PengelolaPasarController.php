<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PengelolaPasar;

class PengelolaPasarController extends Controller
{
    public function index() 
    {
        $pengelolapasar = PengelolaPasar::all();
        return view('pengelolapasar.index')->with('pengelolapasar', $pengelolapasar);
    }

    public function create() 
    {
        return view('pengelolapasar.create');
    }

    public function pengelola(Request $request) 
    {
        $pengelolapasar = new PengelolaPasar;
        $pengelolapasar->nama = $request->nama;
        $pengelolapasar->nomor_telepon = $request->nomor_telepon;
        $pengelolapasar->alamat = $request->alamat;
        $pengelolapasar->tanggal_lahir = $request->tanggal_lahir;
        $pengelolapasar->no_ktp = $request->no_ktp;

        $pengelolapasar->foto_ktp = $request->foto_ktp;

        $foto_ktp = $request->file('foto_ktp');
        $nama_file = $foto_ktp->getClientOriginalName();
        $foto_ktp->move('file_upload',$foto_ktp->getClientOriginalName());
        $pengelolapasar->foto_ktp = $nama_file;
        $pengelolapasar->email = $request->email;
        $pengelolapasar->save();
        return redirect('pengelolapasar');
    }
}
