<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = 'gejala';
    protected $fillable = ['id_penyakit', 'nama_gejala'];
}
