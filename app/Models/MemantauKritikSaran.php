<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemantauKritikSaran extends Model
{
    protected $table = 'memantau_kritik_saran';
    protected $fillable = ['id_kritik_saran','list_kritik_saran'];
}
