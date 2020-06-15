<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentUserRepository;
use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    public $UserRepo;

    public function __construct(EloquentUserRepository $UserRepo)
    {
        $this->middleware('auth');
        $this->UserRepo = $UserRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = $this->UserRepo->all();
        return view('admin.User.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $this->UserRepo->register($request);
        return redirect(route('adminzone.user.index'))->with('message','Success Add New User With Name '.$request->name);
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
        $data['user'] = $this->UserRepo->find($id);
        return view('admin.user.edit',$data);
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
        $input['slug']  = \Str::slug($request->name, '-');

        if(empty($request->password))
        {
            unset($input['password']);
        }
        
        if(isset($request->photo))
        {
            $photo              = $request->file('photo');
            $nama_file          = $photo->getClientOriginalName();
            $photo->move('users',$nama_file);
            $input['photo']     = $nama_file;
        }
        $this->UserRepo->update($id,$input);
        return redirect(route('adminzone.user.index'))->with('message','Success Update User With Name '.$request->name);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->UserRepo->delete($id);
        return redirect(route('adminzone.user.index'))->with('message','Success Delete User');
    }
}
