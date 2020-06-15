<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pemilih;
use App\Models\Paslon;
use App\Models\Petugas;
use App\Models\Tps;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
    	$data['pemilih'] = Pemilih::all();
    	$data['paslon'] = Paslon::all();
    	$data['petugas'] = Petugas::all();
    	$data['tps'] = Tps::all();
        return view('admin.dashboard', $data);
    }
}
