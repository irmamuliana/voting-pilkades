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
            ['tps_id'=>'1','nama'=>'Mutifani Khairina', 'nik'=>'3276046501920003', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1999-08-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'LULUK MAFTUKHAH', 'nik'=>'3321115805120001', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'LUTFI FATHULLAH FARAS', 'nik'=>'3321114604080003', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'NUR SUHUD', 'nik'=>'3321124212860002', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'SITI FARIDAH ', 'nik'=>'3321110107570022', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'jakarta', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'ALFI NADHIF FUADI', 'nik'=>'3321110509850002', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'cibodas', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'NOER ULLIA ASFIYATI ', 'nik'=>'3321114710860005', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'cibubur', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'MUTHIA AYUDIA INARA HASNA', 'nik'=>'3321111012400003', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'ngamprah', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'DULZADI', 'nik'=>'3321115805120090', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'bandung', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'AZZALIA AQILA DZAHIN', 'nik'=>'3321114710860009', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'aceh', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'MATOLABI', 'nik'=>'3321104810890001', 'jenis_kelamin'=>'Laki-Laki', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['tps_id'=>'1','nama'=>'SUNGARNI', 'nik'=>'3321114107510004', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'cilame', 'tanggal_lahir'=>'1979-06-08', 'alamat'=>'cilame', 'status'=>'belum memilih', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],
            
        ];

        \DB::table('pemilihs')->insert($pemilih);
    }
}
