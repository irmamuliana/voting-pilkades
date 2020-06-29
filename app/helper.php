<?php

function hitung_suara_by_tps($paslon_id,$tps_id)
{
    $suara = \DB::select("SELECT count(*) as jumlah_suara FROM hasils where paslon_id=$paslon_id and tps_id=$tps_id");
    return $suara[0]->jumlah_suara;
}

function hitung_suara($paslon_id)
{
    $suara = \DB::select("SELECT count(*) as jumlah_suara FROM hasils where paslon_id=$paslon_id");
    return $suara[0]->jumlah_suara;
}