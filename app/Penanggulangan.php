<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penanggulangan extends Model
{
    protected $table = 'penanggulangan';
    protected $fillable = ['id_penyakit', 'id_pupuk', 'aturan_pakai'];
}
