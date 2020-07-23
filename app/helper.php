<?php

function hitung_suara_by_tps($paslon_id,$tps_id)
{
    $suara = \DB::select("SELECT jumlah as jumlah_suara FROM hasils where paslon_id=$paslon_id and tps_id=$tps_id");
    return $suara==null?0:$suara[0]->jumlah_suara;
}

function hitung_suara($paslon_id)
{
    $suara = \DB::select("SELECT sum(jumlah) as jumlah_suara FROM hasils where paslon_id=$paslon_id");
    return $suara[0]->jumlah_suara;
    //return $suara==null?0:$suara[0]->jumlah_suara;
}