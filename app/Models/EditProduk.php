<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EditProduk extends Model
{
    protected $table = 'edit_produk';
    protected $primaryKey="kode_produk";
    protected $fillable = ['nama_produk','satuan','harga_jual','stok_saat_ini','stok_minimal','foto_produk'];
}
