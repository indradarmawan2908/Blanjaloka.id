<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BahanMasakan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bahan_masakan';
    protected $primaryKey="id_masakan";
    protected $fillable = ['resep_masakan','nama_produk','satuan','harga_jual','stok_saat_ini'];
}
