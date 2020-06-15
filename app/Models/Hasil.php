<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $fillable=['tps_id','nama','no_telephone', 'alamat'];

    public function getCreatedAtAttribute($value)
    {
        return date_format(date_create($value),"d M Y");
    }

    public function tps()
    {
        return $this->belongsTo('App\Models\Tps')->select('nama','alamat');
    }


}
