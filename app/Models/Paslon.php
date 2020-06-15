<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    protected $fillable=['pemilu_id','nama_kepala','nama_wakil','foto', 'visi', 'misi'];

    public function getCreatedAtAttribute($value)
    {
        return date_format(date_create($value),"d M Y");
    }

    public function pemilu()
    {
        return $this->belongsTo('App\Models\Pemilu')->select('tanggal_pelaksanaan','tahun_periode');
    }


}
