<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekomendasiPupuk extends Model
{
    protected $table = 'rekomendasi_pupuk';
    protected $fillable = ['id_penyakit', 'id_pupuk', 'aturan_pakai'];
}
