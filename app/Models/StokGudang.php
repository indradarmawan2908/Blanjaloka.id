<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class StokGudang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'stok_gudang';
    protected $primaryKey= "id_stok_gudang";
    protected $fillable = ['nama_produk','satuan','stok_saat_ini','stok_minimal','nama_toko'];
}
