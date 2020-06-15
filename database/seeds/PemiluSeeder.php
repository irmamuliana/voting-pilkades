<?php

use Illuminate\Database\Seeder;
use App\Models\Pemilu;

class PemiluSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemilu::truncate();

        $pemilu  = [
        ['tanggal_pelaksanaan'=>date('2019-01-01'),'tahun_periode'=>'2020-2025','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
        
    ];

        \DB::table('pemilus')->insert($pemilu);
    }
}
