<?php

namespace App\Http\Controllers;
use App\Models\EventDiskon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventDiskonController extends Controller
{
    public function index(){
     $eventdiskon=EventDiskon::all();
        return view('eventdiskon.view')->with('eventdiskon', $eventdiskon);
    }
    
    public function create(){
     return view('eventdiskon.create');
    }

    public function insert(Request $request){
     $eventdiskon=new EventDiskon();
        $eventdiskon->kalender=$request->kalender;
        $eventdiskon->deskripsi=$request->deskripsi;
        $eventdiskon->produk_event=$request->produk_event;
        $eventdiskon->voucher_diskon=$request->voucher_diskon;
        $eventdiskon->toko_event=$request->toko_event;
        $eventdiskon->save();
     return redirect ('eventdiskon');
    }
    public function delete($id_event_diskon){
        $eventdiskon=EventDiskon::find($id_event_diskon);
           $eventdiskon->delete();
           return back();
       }
   
}
