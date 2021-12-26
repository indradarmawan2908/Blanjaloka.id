<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelacakanPesanan extends Model
{
    protected $table = 'pelacakan_pesanan';
    protected $fillable = ['kode_transaksi','nama_pembeli','nomor_telepon','alamat_pembeli','titik_letak_produk','jarak_tempuh','nama_driver','jenis_kendaraan','status'];
}
