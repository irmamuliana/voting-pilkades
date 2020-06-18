<?php

use Illuminate\Database\Seeder;
use App\Models\Tps;

class TpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tps::truncate();

        $tps  = [
            ['nama'=>'TPS 1','alamat'=>'KP. Bandukurung RW. 01','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            ['nama'=>'TPS 2','alamat'=>'KP. Pakuhaji RW. 07','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            ['nama'=>'TPS 3','alamat'=>'KP. Babakan Leles RW. 09','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            ['nama'=>'TPS 4','alamat'=>'KP. Cikawati RW. 03','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')]
        ];

        \DB::table('tps')->insert($tps);
    }
}
