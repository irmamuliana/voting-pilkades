<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $fillable=['paslon_id','tps_id','jumlah'];

    public function getCreatedAtAttribute($value)
    {
        return date_format(date_create($value),"d M Y");
    }

    public function tps()
    {
        return $this->belongsTo('App\Models\Tps')->select('nama','alamat');
    }

    public function paslon()
    {
        return $this->belongsTo('App\Models\Paslon')->select('nama_kepala','nama_wakil');
    }


}
