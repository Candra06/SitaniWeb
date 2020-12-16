<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $fillable = ['nama','deskripsi', 'penanganan', 'gambar', 'jenis', 'status'];
}
