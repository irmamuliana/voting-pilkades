@extends('admin.layout')
@section('title','Manage User')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
             
              <a href="{{ route('adminzone.user.create') }}" class="btn btn-danger"><i class="fas fa-edit"></i> Add New Data</a>
          </div>
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"></th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th width="10">#</th>
                          <th width="10">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                      <tr>
                          <td># {{ $loop->iteration}}</td>
                          <td>{{ $user->name}}</td>
                          <td>{{ $user->email}}</td>
                          <td><a href="{{ route('adminzone.user.edit',['id'=>$user->id]) }}" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a></td>
                          <td>
                              {{ Form::open(['url'=>route('adminzone.user.destroy',['id'=>$user->id]),'method'=>'delete'])}}
                              <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                              {{ Form::close()}}
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                          <th>#</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th></th>
                          <th></th>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
  </div>
</section>
@endsection