<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EditProduk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'edit_produk';
    protected $primaryKey="kode_produk";
    protected $fillable = ['nama_produk','satuan','harga_jual','stok_saat_ini','stok_minimal','foto_produk'];
}
