<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BelanjaHarian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'belanja_harian';
    protected $primaryKey= "kode_produk";
    protected $fillable = ['nama_produk','satuan','harga_jual','stok_saat_ini','stok_minimal'];
}
