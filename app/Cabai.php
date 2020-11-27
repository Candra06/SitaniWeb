<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabai extends Model
{
    protected $table = 'cabai';
    protected $fillable = ['jenis_cabai', 'nama_latin', 'estimasi_panen'];
}
