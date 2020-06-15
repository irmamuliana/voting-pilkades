@extends('admin.layout')
@section('title','Jadwal Pemilihan')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"> No </th>
                          <th>Tanggal</th>
                          <th>Jam Mulai</th>
                          <th>Jam Akhir</th>
                          <th width="10">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($jadwal_pemilihan as $jadwal)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $jadwal->tanggal}}</td>
                          <td>{{ $jadwal->jam_mulai}}</td>
                          <td>{{ $jadwal->jam_akhir}}</td>
                          <td><a href="{{ route('adminzone.jadwal_pemilihan.edit',['id'=>$jadwal->id]) }}" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a></td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>

@endsection