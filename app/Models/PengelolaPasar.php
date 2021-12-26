<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengelolaPasar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pengelolapasar';
    protected $fillable = ['id_pengelolapasar','nama','nomor_telepon','alamat','tanggal_lahir','no_ktp','foto_ktp','email','password'];
}
