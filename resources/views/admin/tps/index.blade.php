@extends('admin.layout')
@section('title','Data TPS')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
             
              <a href="{{ route('adminzone.tps.create') }}" class="btn btn-danger"><i class="fas fa-edit"></i> Add New Data</a>
          </div>
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"> No </th>
                          <th>Nama TPS</th>
                          <th>Alamat TPS</th>
                          <th width="10">#</th>
                          <th width="10">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($tps as $tps)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $tps->nama}}</td>
                          <td>{{ $tps->alamat}}</td>
                          <td><a href="{{ route('adminzone.tps.edit',['id'=>$tps->id]) }}" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a></td>
                          <td>
                              {{ Form::open(['url'=>route('adminzone.tps.destroy',['id'=>$tps->id]),'method'=>'delete'])}}
                              <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                              {{ Form::close()}}
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>
@endsection