<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StokGudang extends Model
{
    protected $table = 'stok_gudang';
    protected $primaryKey= "id_stok_gudang";
    protected $fillable = ['nama_produk','satuan','stok_saat_ini','stok_minimal','nama_toko'];
}
