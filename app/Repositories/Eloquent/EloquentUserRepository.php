<?php

namespace App\Repositories\Eloquent;

use App\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Support\Facades\Hash;
use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserRepository extends AbstractRepository implements UserRepository
{
    public function entity()
    {
        return User::class;
    }

    public function register($request)
    {
        if(isset($request->photo))
        {
            $photo               = $request->file('photo');
            $nama_file          = $photo->getClientOriginalName();
            $photo->move('users',$nama_file);
            $input['photo']      = $nama_file;
        }

        $user               = new User();
        $user->name         = $request->name;
        $user->slug         = \Str::slug($request->name, '-');
        $user->email        = $request->email;
        $user->description  = $request->description;
        $user->password     = Hash::make($request->password);
        return $user->save();
    }
}
