<?php

use Illuminate\Database\Seeder;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Petugas::truncate();

        $petugas  = [
        ['tps_id'=>'1','nama'=>'MATOLABI', 'no_telephone'=>'081378569093', 'alamat'=>'cilame','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
        ['tps_id'=>'2','nama'=>'ABDUL WAHID', 'no_telephone'=>'082278095744', 'alamat'=>'cilame','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
        ['tps_id'=>'3','nama'=>'MAHMUDIN', 'no_telephone'=>'081200674455', 'alamat'=>'cilame','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
        ['tps_id'=>'4','nama'=>'AHMAD SUTOMO', 'no_telephone'=>'081355870912', 'alamat'=>'cilame','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
    ];

        \DB::table('petugas')->insert($petugas);
    }
}
