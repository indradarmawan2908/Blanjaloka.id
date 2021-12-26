<?php

namespace App\Http\Controllers;
use App\Models\Datapasar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataPasarController extends Controller
{
    public function index()
    {
      $datapasar = Datapasar::all();
      return view('datapasar.index')->with('datapasar', $datapasar);
    }
    
    public function create()
    {
     return view('datapasar.create');
    }

    public function datapasa(Request $request){
     $datapasar=new Datapasar();
        $datapasar->nama=$request->nama;
        $datapasar->alamat=$request->alamat;
        $datapasar->profile_pasar=$request->profile_pasar;
        $datapasar->save();
     return redirect ('datapasar');
    }
    public function edit($id_datapasar){
        $datapasar=Datapasar::find($id_datapasar);
        return view('datapasar.edit',compact('datapasar'));
       }
   
       public function update(Request $request, $id_datapasar){     
        $datapasar = DataPasar::findOrFail($id_datapasar);
        $datapasar->nama=$request->get('nama');
        $datapasar->alamat=$request->get('alamat');
        $datapasar->profile_pasar=$request->get('profile_pasar');
           $datapasar->save();
        return redirect ('datapasar')->with('alert-success','Data berhasil Diubah.');
       }
    public function read($id_datapasar){
        $datapasar=DataPasar::find($id_datapasar);
        return view('datapasar.read',compact('datapasar'));
       }
       public function delete($id_datapasar){
         $datapasar=Datapasar::find($id_datapasar);
            $datapasar->delete();
            return back();
        }
}
