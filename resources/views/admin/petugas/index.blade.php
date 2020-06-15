@extends('admin.layout')
@section('title','Data Petugas')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
             
              <a href="{{ route('adminzone.petugas.create') }}" class="btn btn-danger"><i class="fas fa-edit"></i> Add New Data</a>
          </div>
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"> No </th>
                          <th>Nama Petugas</th>
                          <th>No Telepon</th>
                          <th>Alamat</th>
                          <th>Petugas</th>
                          <th width="10">#</th>
                          <th width="10">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($petugas as $petugas)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $petugas->nama}}</td>
                          <td>{{ $petugas->no_telephone}}</td>
                          <td>{{ $petugas->alamat}}</td>
                          <td>{{ $petugas->tps->nama}}</td>
                          <td><a href="{{ route('adminzone.petugas.edit',['id'=>$petugas->id]) }}" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a></td>
                          <td>
                              {{ Form::open(['url'=>route('adminzone.petugas.destroy',['id'=>$petugas->id]),'method'=>'delete'])}}
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