<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toko extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'toko';
    protected $primaryKey= "id_toko";
    protected $fillable = ['nama','alamat','titik_kordinat','foto_profiltoko'];
}
