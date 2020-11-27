<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pupuk extends Model
{
    protected $table = 'pupuk';
    protected $fillable = ['nama_pupuk','deskripsi', 'kandungan', 'aturan_pakai', 'gambar', 'harga', 'type', 'jenis', 'status'];
}
