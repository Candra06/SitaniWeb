<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $fillable = ['nama','ciri_ciri', 'penanggulangan', 'pencegahan', 'gambar', 'jenis', 'status'];
}
