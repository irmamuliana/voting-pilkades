<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentPaslonRepository;
use App\Http\Requests\PaslonCreate;
use App\Models\Pemilu;

class PaslonController extends Controller
{
    
    public $paslonRepo;

    public function __construct(EloquentPaslonRepository $paslonRepo)
    {
        $this->middleware('auth');
        $this->paslonRepo = $paslonRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['paslon'] = $this->paslonRepo->all();
        return view('admin.paslon.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pemilu'] = Pemilu::pluck('tahun_periode', 'id');
        return view('admin.paslon.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaslonCreate $request)
    {
        $input          = $request->all();
        $input['slug']  = \Str::slug($request->nama, '-');

        if(isset($request->foto))
        {
            $foto               = $request->file('foto');
            $nama_file          = $foto->getClientOriginalName();
            $foto->move('paslon',$nama_file);
            $input['foto']      = $nama_file;
        }

        $this->paslonRepo->create($input);
        return redirect(route('adminzone.paslon.index'))->with('message','Berhasil Menambahkan Data Dengan Nama '.$request->nama);
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
        $data['paslon'] = $this->paslonRepo->find($id);
        $data['pemilu'] = Pemilu::pluck('tahun_periode', 'id');
        return view('admin.paslon.edit',$data);
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

        if(isset($request->foto))
        {
            $foto               = $request->file('foto');
            $nama_file          = $foto->getClientOriginalName();
            $foto->move('paslon',$nama_file);
            $input['foto']      = $nama_file;
        }

        $this->paslonRepo->update($id,$input);
        return redirect(route('adminzone.paslon.index'))->with('message','Berhasil Mengedit Data Dengan Nama '.$request->nama);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->paslonRepo->delete($id);
        return redirect(route('adminzone.paslon.index'))->with('message','Berhasil Menghapus Data');
    }
    
}
