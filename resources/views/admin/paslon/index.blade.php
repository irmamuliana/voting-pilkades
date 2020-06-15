@extends('admin.layout')
@section('title','Data Paslon')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
             
              <a href="{{ route('adminzone.paslon.create') }}" class="btn btn-danger"><i class="fas fa-edit"></i> Add New Data</a>
          </div>
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"> No </th>
                          <th>Nama Kepala</th>
                          <th>Nama Wakil</th>
                          <th>Tahun Periode</th>
                          <th>Visi</th>
                          <th>Misi</th>
                          <th>Foto</th>
                          <th width="10">#</th>
                          <th width="10">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($paslon as $paslon)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $paslon->nama_kepala}}</td>
                          <td>{{ $paslon->nama_wakil}}</td>
                          <td>{{ $paslon->pemilu->tahun_periode}}</td>
                          <td>{{ $paslon->visi}}</td>
                          <td>{{ $paslon->misi}}</td>
                      <td><img src="{{url('/paslon/'.$paslon->foto)}}"></td>
                          <td><a href="{{ route('adminzone.paslon.edit',['id'=>$paslon->id]) }}" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a></td>
                          <td>
                              {{ Form::open(['url'=>route('adminzone.paslon.destroy',['id'=>$paslon->id]),'method'=>'delete'])}}
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