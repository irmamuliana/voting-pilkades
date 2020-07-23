<?php

use Illuminate\Database\Seeder;
use App\Models\Pemilih;

class PemilihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemilih::truncate();

        $pemilih  = [
            ['tps_id'=>'1','nama'=>'Mutifani Khairina', 'nik'=>'3276046501920003', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1999-08-08', 'alamat'=>'firdaus garden', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'2','nama'=>'Luluk Maftukhah', 'nik'=>'3321115805120001', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bekasi', 'tanggal_lahir'=>'1970-12-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'2','nama'=>'Lutfi Fathullah Faras', 'nik'=>'3321114604080003', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'Cikarang', 'tanggal_lahir'=>'1995-06-01', 'alamat'=>'randukurung', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'4','nama'=>'Nur Suhud', 'nik'=>'3321124212860002', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'Jakarta', 'tanggal_lahir'=>'1970-05-18', 'alamat'=>'villa pakuhaji', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'Siti Faridah', 'nik'=>'3321110107570022', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Jakarta', 'tanggal_lahir'=>'1977-12-08', 'alamat'=>'firdaus garden', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'3','nama'=>'Alfi Nadhif Fuadi', 'nik'=>'3321110509850002', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'cibodas', 'tanggal_lahir'=>'1992-08-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'2','nama'=>'Noer Ullia Asfiyati ', 'nik'=>'3321114710860005', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'cibubur', 'tanggal_lahir'=>'1990-06-05', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'Muthia Ayudi Inara Hasna', 'nik'=>'3321111012400003', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'ngamprah', 'tanggal_lahir'=>'1994-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'3','nama'=>'Dulzadi', 'nik'=>'3321115805120090', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'bandung', 'tanggal_lahir'=>'1973-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'2','nama'=>'Azzalia Aqila Dzahin', 'nik'=>'3321114710860009', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'aceh', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'Matolabi', 'nik'=>'3321104810890001', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'Sungarni', 'nik'=>'3321114107510004', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            
        ];

        \DB::table('pemilihs')->insert($pemilih);
    }
}
