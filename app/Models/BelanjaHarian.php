<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BelanjaHarian extends Model
{
    protected $table = 'belanja_harian';
    protected $primaryKey= "kode_produk";
    protected $fillable = ['nama_produk','satuan','harga_jual','stok_saat_ini','stok_minimal'];
}
