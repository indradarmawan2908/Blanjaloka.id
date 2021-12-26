<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $table = 'kategori';
    protected $primaryKey= "id_kategori";
    protected $fillable = ['kategori'];
}
