<?php

use Illuminate\Database\Seeder;
use App\Models\Paslon;

class PaslonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paslon::truncate();

        $paslon  = [
            ['pemilu_id'=>'1','nama_kepala'=>'Ahmad Nur Irfan', 'nama_wakil'=>'Ateng Sopandi', 'foto'=>'index.jpg', 'visi'=>'Terwujudnya Kehidupan masyarakat yang sejahtera dan harmonis berlandaskan agama', 'misi'=>'(1). Meningkatkan fasilitas kesejahteraan umum. (2). Meningkatkan profesionalitas pelayanan publik. (3). Mengembangkan potensi ekonomi desa dengan membangun jaringan usaha berkelanjutan. (4). Menguatkan peran lembaga keluarga dalam pembinaan dan pengendalian social. (5). Meningkatkan kualitas generasi muda yang berdaya saing tinggi dalam persaingan global.', 'hasil'=>'0', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['pemilu_id'=>'1','nama_kepala'=>'Budi Sajayanto', 'nama_wakil'=>'Andi Sutarji', 'foto'=>'index1.jpg', 'visi'=>'Terbangunnya tata kelola pemerintahan desa yang baik dan bersih guna mewujudkan desa pakuhaji yang adil, makmur, sejahtera dan bermartabat', 'misi'=>'(1). Menyelenggarakan pemerintah desa yang bersih, demokratis dan terbebas dari korupsi, kolusi dan nepotisme serta bentuk-bentuk pelanggaran lainnya. (2). Mengembangkan perekonomian masyarakat melalui pemanfaatan potensi desa. (3). Meningkatkan mutu kesejahteraan untuk mencapai taraf kehidupan yang lebih baik dan berpendidikan', 'hasil'=>'0','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            ['pemilu_id'=>'1','nama_kepala'=>'Ayi Sudrajat', 'nama_wakil'=>'Muhammad Zaki', 'foto'=>'index2.jpg', 'visi'=>'Mewujudkan Desa Pakuhaji yang Agamis, Mandiri, Sehat, Bersih dan Sejahtera', 'misi'=>'(1). Melanjutkan kegiatan ke agamaan yang telah berjalan. (2). Mewujudkan kwalitas kehidupan masyarakat yang cerdas, sehat, bersih dan berbudaya. (3). Mewujudkan pelayanan publik yang Ramah, profesional dan tuntas dengan memanfaatkan teknologi informasi. (4). Mewujudkan tata kelola pemerintahan yang baik, amanah, keterbukaan dan taat terhadap peraturaan. (5). Mewujudkan hubungan yang harmonis antara masyarakat pemerintah dan lembaga desa.', 'hasil'=>'0', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:')],

            
        ];

        \DB::table('paslons')->insert($paslon);
    }
}
