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
            ['nama'=>'TPS 1','alamat'=>'cilame','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            ['nama'=>'TPS 2','alamat'=>'pakuhaji','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            ['nama'=>'TPS 3','alamat'=>'padalarang','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            ['nama'=>'TPS 4','alamat'=>'cimahi','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')]
        ];

        \DB::table('tps')->insert($tps);
    }
}
