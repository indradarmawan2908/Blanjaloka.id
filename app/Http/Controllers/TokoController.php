<?php

namespace App\Http\Controllers;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function index() 
    {
        $toko = Toko::all();
        return view('toko.index')->with('toko', $toko);
    }

    public function create() 
    {
        return view('toko.create');
    }

    public function store(Request $request) 
    {
        $toko = new Toko;
        $toko->nama = $request->nama;
        $toko->alamat = $request->alamat;
        $toko->titik_kordinat = $request->titik_kordinat;
        $toko->foto_profiltoko = $request->foto_profiltoko;

        $foto_profiltoko = $request->file('foto_profiltoko');
        $nama_file = $foto_profiltoko->getClientOriginalName();
        $foto_profiltoko->move('file_upload',$foto_profiltoko->getClientOriginalName());
        $toko->foto_profiltoko = $nama_file;

        $toko->save();
        return redirect('toko');
    }

    public function edit($id_toko) 
    {
        $toko=Toko::find($id_toko);
        return view('toko.edit',compact('toko'));
    }

    public function update(Request $request, $id_toko)
    {
        $toko = Toko::findOrFail($id_toko);
        $foto_profiltoko = $request->file('foto_profiltoko'); 
        $tok = $foto_profiltoko->getClientOriginalName();

        $TokoController = [
            'id_toko'            => $request['id_toko'],
            'nama'  => $request['nama'],
            'titik_kordinat'         => $request['titik_kordinat'],
            'foto_profiltoko'          => $tok,
        ];
        $foto_profiltoko->move('file_upload',$tok);

        $toko->update($TokoController);
        return redirect('toko');
    }

    public function delete($id_toko){
        $toko=Toko::find($id_toko);
           $toko->delete();
           return back();
       }

}
