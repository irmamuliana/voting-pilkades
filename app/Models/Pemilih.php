<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    protected $fillable=['tps_id','nama','nik','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','status'];

    public function getCreatedAtAttribute($value)
    {
        return date_format(date_create($value),"d M Y");
    }

    public function tps()
    {
        return $this->belongsTo('App\Models\Tps')->select('nama','alamat');
    }

    public function jadwal_pemilihan()
    {
        return $this->belongsTo('App\Models\JadwalPemilihan')->select('tanggal','jam_mulai', 'jam_akhir');
    }


}
