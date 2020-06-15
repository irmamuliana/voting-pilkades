<?php

namespace App\Http\Controllers\Qrcode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Pemilih;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $pemilih = Pemilih::where('nik',$request->nik)->first();
        if($pemilih)
        {
            if($pemilih->status=='Sudah Memilih')
            {
                return 'sudah_pilih';
            }else
            {
                $request->session()->put('user_name',$pemilih->nama);
                $request->session()->put('nik',$request->nik);
                return 'user_found';
            }
            
        }else
        {
            return 'user_not_found';
        }
    }
}
