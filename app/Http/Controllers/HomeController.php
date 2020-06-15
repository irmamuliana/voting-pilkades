<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Paslon;
use App\Models\Pemilih;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // chek jadwal
        $jadwal = \DB::table('jadwal_pemilihans')->find(1);
        $tanggal_sekarang = date('Y-m-d');
        $jam_sekarang = date('H:i:s');

        if($jadwal->tanggal==$tanggal_sekarang)
        {
            $date_a = new \DateTime(date('Y-m-d H:i:s'));
            $date_b = new \DateTime($jadwal->tanggal.' '.$jadwal->jam_akhir);
            $diff = $date_a->getTimestamp() - $date_b->getTimestamp();
            if($diff>0)
            {
                $data['message'] = "jadwal pemilihan sudah ditutup";
                $data['displayButton'] = false;
            }else
            {
                $data['message'] = "Klik tombol mulai untuk melakukan pemilihan";
                $data['displayButton']=true;
            }
        }else
        {
            $data['message'] = "Jadwal Pemilihan Belum Dibuka";
            $data['displayButton'] = false;
        }

        $paslon = Paslon::all();
        return view('welcome', $data);
    }

    public function voting()
    {

        if(session('nik')==null)
        {
            return redirect('/');
        }else
        {
            $data['paslons'] = Paslon::all();
            return view('pemilih.index', $data);
        }
    }

    public function voting_save(Request $request)
    {
        $paslon = Paslon::find($request->paslon_id);
        $paslon->hasil = $paslon->hasil+1;
        $paslon->update();

        $pemilih = Pemilih::where('nik',\Session('nik'))->first();
        $pemilih->status='sudah memilih';
        $pemilih->update();
        \Session::forget('nik');
        \Session::forget('user_name');
        return redirect('/');
    }
}
