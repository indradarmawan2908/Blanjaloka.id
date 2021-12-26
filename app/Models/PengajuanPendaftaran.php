<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanPendaftaran extends Model
{
    protected $table = 'pengajuan_pendaftaran';
    protected $fillable = ['id_pengajuan_pendaftaran','nama','nomor_telepon','alamat','tanggal_lahir','pengajuan_pendaftaran','status_pendaftaran'];
}
