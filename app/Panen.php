<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    protected $tabel = 'panen';
    protected $fillable = ['id_lahan', 'tanggal_panen', 'hasil'];
}
