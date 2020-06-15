<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentPetugasRepository;
use App\Http\Requests\PetugasCreate;
use App\Models\Tps;

class PetugasController extends Controller
{
    
    public $petugasRepo;

    public function __construct(EloquentPetugasRepository $petugasRepo)
    {
        $this->middleware('auth');
        $this->petugasRepo = $petugasRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['petugas'] = $this->petugasRepo->all();
        return view('admin.petugas.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tps'] = Tps::pluck('nama', 'id');
        return view('admin.petugas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
            'tps_id'        => 'required',
            'nama'          => 'required',
            'no_telephone'  => 'required',
            'alamat'        => 'required',
        ],
        [
            'tps_id.required'       => 'Tps Harus Dipilih!!!',
            'nama.required'         => 'Nama Tidak Boleh Kosong!!!',
            'no_telephone.required' => 'Tempat Lahir Tidak Boleh Kosong!!!',
            'alamat.required'       => 'Alamat Tidak Boleh Kosong!!!',
        ]);

        $input          = $request->all();
        $input['slug']  = \Str::slug($request->nama, '-');
        $this->petugasRepo->create($input);
        return redirect(route('adminzone.petugas.index'))->with('message','Berhasil Menambahkan Data Petugas Dengan Nama '.$request->nama);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['petugas'] = $this->petugasRepo->find($id);
        $data['tps'] = Tps::pluck('nama', 'id');
        return view('admin.petugas.edit',$data);
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
        $request->validate ([
            'tps_id'        => 'required',
            'nama'          => 'required',
            'no_telephone'  => 'required',
            'alamat'        => 'required',
        ],
        [
            'tps_id.required'       => 'Tps Harus Dipilih!!!',
            'nama.required'         => 'Nama Harus Diisi!!!',
            'no_telephone.required' => 'Tempat Lahir Harus Diisi!!!',
            'alamat.required'       => 'Alamat Harus Diisi!!!',
        ]);

        $input          = $request->all();
        $input['slug']  = \Str::slug($request->nama, '-');
        $this->petugasRepo->update($id,$input);
        return redirect(route('adminzone.petugas.index'))->with('message','Berhasil Menambahkan Data Petugas Dengan Nama '.$request->nama);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->petugasRepo->delete($id);
        return redirect(route('adminzone.petugas.index'))->with('message','Berhasil Menghapus Data Petugas');
    }
    
}
