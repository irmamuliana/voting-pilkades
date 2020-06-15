@extends('admin.layout')
@section('title','Data Pemilih Tetap')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
             
              <a href="{{ route('adminzone.pemilih.create') }}" class="btn btn-danger"><i class="fas fa-edit"></i> Add New Data</a>

              <a href="laporan-pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
          </div>
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"> No </th>
                          <th>Nama Pemilih</th>
                          <th>NIK</th>
                          <th>TPS</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>#</th>
                          <th>#</th>
                          <th>#</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($pemilih as $pemilih)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $pemilih->nama}}</td>
                          <td>{{ $pemilih->nik}}</td>
                          <td>{{ $pemilih->tps->nama}}</td>
                          <td>{{ $pemilih->jenis_kelamin}}</td>
                          <td>{{ $pemilih->tempat_lahir}}</td>
                          <td>{{ $pemilih->tanggal_lahir}}</td>
                          <td>{{ $pemilih->alamat}}</td>
                          <td><a href="{{ route('adminzone.pemilih.edit',['id'=>$pemilih->id]) }}" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a></td>
                          <td>
                              {{ Form::open(['url'=>route('adminzone.pemilih.destroy',['id'=>$pemilih->id]),'method'=>'delete'])}}
                              <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                              {{ Form::close()}}
                          </td>
                          <td><a href="cetak/{{$pemilih->id}}" class="btn btn-danger btn-sm" target="_blank"><i class="fa fa-print"></i></a></td>
                      </tr>
                      @endforeach
                  </tbody>
                  
              </table>
          </div>
      </div>
  </div>
</section>
@endsection