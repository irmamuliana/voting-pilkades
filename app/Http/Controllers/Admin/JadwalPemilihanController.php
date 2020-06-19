<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentJadwalPemilihanRepository;
use App\Http\Requests\JadwalPemilihanCreate;

class JadwalPemilihanController extends Controller
{
    
    public $jadwalpemilihanRepo;

    public function __construct(EloquentJadwalPemilihanRepository $jadwalpemilihanRepo)
    {
        $this->middleware('auth');
        $this->jadwalpemilihanRepo = $jadwalpemilihanRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jadwal_pemilihan'] = $this->jadwalpemilihanRepo->all();
        return view('admin.jadwal_pemilihan.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['jadwal_pemilihan'] = $this->jadwalpemilihanRepo->find($id);
        return view('admin.jadwal_pemilihan.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $input          = $request->all();
        $input['slug']  = \Str::slug($request->nama, '-');
        $this->jadwalpemilihanRepo->update($id,$input);
        return redirect(route('adminzone.jadwal_pemilihan.index'))->with('message','Berhasil Mengedit Jadwal Pemilihan '.$request->nama);

    }

}
