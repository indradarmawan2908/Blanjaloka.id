<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HideTimeline extends Model
{
    protected $table = 'hide_timeline';
    protected $fillable = ['id_hide_timeline','video','gambar','deskripsi','nama_toko'];
}
