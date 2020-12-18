<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    protected $table = 'lahan';
    protected $fillable = ['id_cabai', 'id_petani', 'nama_lahan', 'luas', 'tanggal_tanam', 'status'];
}
