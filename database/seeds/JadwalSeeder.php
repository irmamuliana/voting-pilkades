<?php

use Illuminate\Database\Seeder;
use App\Models\JadwalPemilihan;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JadwalPemilihan::truncate();

        $jadwalpemilihan  = [
            ['tanggal'=>date('2020-07-01'),'jam_mulai'=>'00:00:00','jam_akhir'=>'00:00:00', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')]
            
        ];

        \DB::table('jadwal_pemilihans')->insert($jadwalpemilihan);
    }
}
