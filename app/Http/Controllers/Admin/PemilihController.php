<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentPemilihRepository;
use App\Http\Requests\PemilihCreate;
use App\Models\Tps;
use PDF;

class PemilihController extends Controller
{
    
    public $pemilihRepo;

    public function __construct(EloquentPemilihRepository $pemilihRepo)
    {
        $this->middleware('auth');
        $this->pemilihRepo = $pemilihRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pemilih'] = $this->pemilihRepo->all();
        return view('admin.pemilih.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tps'] = Tps::pluck('nama', 'id');
        return view('admin.pemilih.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PemilihCreate $request)
    {
        $input          = $request->all();
        $input['slug']  = \Str::slug($request->nama, '-');
        $this->pemilihRepo->create($input);
        return redirect(route('adminzone.pemilih.index'))->with('message','Berhasil Menambahkan Data Dengan Nama '.$request->nama);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pemilih'] = $this->pemilihRepo->find($id);

        $data['tps'] = Tps::pluck('nama', 'id');
        return view('admin.pemilih.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input          = $request->all();
        $input['slug']  = \Str::slug($request->nama, '-');
        $this->pemilihRepo->update($id,$input);
        return redirect(route('adminzone.pemilih.index'))->with('message','Berhasil Mengedit Data Dengan Nama '.$request->nama);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pemilihRepo->delete($id);
        return redirect(route('adminzone.pemilih.index'))->with('message','Berhasil Menghapus Data Pemilih');
    }

    public function generatePDF()

    {
        $data['pemilih'] = $this->pemilihRepo->all();

        $pdf = PDF::loadView('admin.pemilih.cetak', $data);
        return $pdf->stream();
    }

    public function cetakPemilih($id)
    {
        $data['pemilih'] = $this->pemilihRepo->find($id);

        return view('admin.pemilih.cetakPemilih',$data);
    }

}
