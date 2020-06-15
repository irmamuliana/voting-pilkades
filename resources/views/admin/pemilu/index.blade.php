@extends('admin.layout')
@section('title','Data Pemilu')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
             
              <a href="{{ route('adminzone.pemilu.create') }}" class="btn btn-danger"><i class="fas fa-edit"></i> Add New Data</a>
          </div>
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"> No </th>
                          <th>Tanggal Pelaksanaan</th>
                          <th>Tahun Periode</th>
                          <th width="10">#</th>
                          <th width="10">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($pemilu as $pemilu)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $pemilu->tanggal_pelaksanaan}}</td>
                          <td>{{ $pemilu->tahun_periode}}</td>
                          <td><a href="{{ route('adminzone.pemilu.edit',['id'=>$pemilu->id]) }}" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a></td>
                          <td>
                              {{ Form::open(['url'=>route('adminzone.pemilu.destroy',['id'=>$pemilu->id]),'method'=>'delete'])}}
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