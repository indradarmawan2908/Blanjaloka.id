<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SewaToko extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sewa_toko';
    protected $primaryKey= "kode_toko";
    protected $fillable = ['nama','alamat','titik_kordinat','sewa_toko'];
}
