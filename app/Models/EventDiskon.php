<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventDiskon extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'event_diskon';
    protected $primaryKey="id_event_diskon";
    protected $fillable = ['kalender','deskripsi','produk_event','voucher_diskon','toko_event'];
}
