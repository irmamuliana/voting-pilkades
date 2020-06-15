<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentPemiluRepository;
use App\Http\Requests\PemiluCreate;

class PemiluController extends Controller
{
    
    public $pemiluRepo;

    public function __construct(EloquentPemiluRepository $pemiluRepo)
    {
        $this->middleware('auth');
        $this->pemiluRepo = $pemiluRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pemilu'] = $this->pemiluRepo->all();
        return view('admin.pemilu.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pemilu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PemiluCreate $request)
    {
        $input          = $request->all();
        $input['slug']  = \Str::slug($request->tahun_pelaksanaan, '-');
        $this->pemiluRepo->create($input);
        return redirect(route('adminzone.pemilu.index'))->with('message','Berhasil Menambahkan Data Pemilu');
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
        $data['pemilu'] = $this->pemiluRepo->find($id);
        return view('admin.pemilu.edit',$data);
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
        $input['slug']  = \Str::slug($request->tahun_pelaksanaan, '-');
        $this->pemiluRepo->update($id,$input);
        return redirect(route('adminzone.pemilu.index'))->with('message','Berhasil Mengedit Data Pemilu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pemiluRepo->delete($id);
        return redirect(route('adminzone.pemilu.index'))->with('message','Berhasil Menghapus Data Pemilu');
    }
    
}
