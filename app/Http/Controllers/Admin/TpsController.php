<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentTpsRepository;
use App\Http\Requests\TpsCreate;

class TpsController extends Controller
{
    
    public $tpsRepo;

    public function __construct(EloquentTpsRepository $tpsRepo)
    {
        $this->middleware('auth');
        $this->tpsRepo = $tpsRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tps'] = $this->tpsRepo->all();
        return view('admin.tps.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tps.create');
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
            'nama'    => 'required',
            'alamat'  => 'required',
        ],
        [
            'nama.required'   => 'Nama Harus Diisi!!!',
            'alamat.required' => 'Alamat Harus Diisi!!!',
        ]);

        $input          = $request->all();
        $input['slug']  = \Str::slug($request->nama, '-');
        $this->tpsRepo->create($input);
        return redirect(route('adminzone.tps.index'))->with('message','Berhasil Menambahkan Data TPS Dengan Nama '.$request->nama);
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
        $data['tps'] = $this->tpsRepo->find($id);
        return view('admin.tps.edit',$data);
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
            'nama'    => 'required',
            'alamat'  => 'required',
        ],
        [
            'nama.required'   => 'Nama Harus Diisi!!!',
            'alamat.required' => 'Alamat Harus Diisi!!!',
        ]);
        
        $input          = $request->all();
        $input['slug']  = \Str::slug($request->name, '-');
        $this->tpsRepo->update($id,$input);
        return redirect(route('adminzone.tps.index'))->with('message','Berhasil Mengedit Data TPS Dengan Nama '.$request->nama);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tpsRepo->delete($id);
        return redirect(route('adminzone.tps.index'))->with('message','Success Delete Tps');
    }
    
}
