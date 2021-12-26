<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengirimanDriver extends Model
{
    protected $table = 'pengiriman_driver';
    protected $fillable = ['kode_transaksi','kode_produk','nama_produk','nama_pedagang'
    ,'nomor_pedagang','alamat_pedagang','nama_pembeli','nomor_telepom','alamat_pembeli'
    ,'titik_letak_produk','jumlah_tempuh','nama_driver','jenis_kendaraan','ongkos_kirim'];
}
