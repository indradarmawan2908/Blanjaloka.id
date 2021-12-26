<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function create()
    {
        $kategori = KategoriProduk::all();
        return view('kategoriproduk.create', compact('kategori'));
    }
   
}
