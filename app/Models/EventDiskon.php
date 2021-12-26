<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventDiskon extends Model
{
    protected $table = 'event-diskon';
    protected $primaryKey="id_event_diskon";
    protected $fillable = ['deskripsi','produk_event','voucher_diskon','toko_event'];
}
