<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanMasakan extends Model
{
    protected $table = 'bahan_masakan';
    protected $primaryKey="id_masakan";
    protected $fillable = ['resep_masakan','satuan','harga_jual','stok_saat_ini'];
}
