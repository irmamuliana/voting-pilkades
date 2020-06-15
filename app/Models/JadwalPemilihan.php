<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPemilihan extends Model
{
    protected $fillable=['id', 'tanggal','jam_mulai', 'jam_akhir'];

}
