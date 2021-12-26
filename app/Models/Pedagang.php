<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedagang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pedagang';
    protected $primaryKey= "id_pedagang";
    protected $fillable = ['nama','nomor_telepon','alamat','tanggal_lahir','no_ktp','foto_ktp','data_pedagang','nomor_rekening','foto_rekening','status_pembayaran'];
}
