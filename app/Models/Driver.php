<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'driver';
    protected $primaryKey="kode_driver";
    protected $fillable = ['nama','nomor_telepon','alamat','tanggal_lahir','no_ktp',
    'foto_ktp','data_driver','kendaraan','nomor_kendaraan','foto_stnk','nomor_rekening',
    'foto_rekening'];
    
}
