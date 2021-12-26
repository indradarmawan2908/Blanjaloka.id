<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPasar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'data_pasar';
    protected $primaryKey="id_datapasar";
    protected $fillable = ['nama','alamat','profile_pasar'];
}
