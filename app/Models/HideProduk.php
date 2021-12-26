<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HideProduk extends Model
{
    protected $table = 'hide_produk';
    protected $primaryKey="id_produk";
    protected $fillable = ['satuan','harga_jual','stok_saat_ini','stok_minimal','foto_produk'];
}
