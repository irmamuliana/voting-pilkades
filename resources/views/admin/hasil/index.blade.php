@extends('admin.layout')
@section('title','Hasil')
@section('content')
<section class="content">
  <div class="container-fluid">
      <div class="card">
        <div class="card-header">
              <a href="laporan-hasil" class="btn btn-primary" target="_blank">CETAK HASIL</a>
          </div>
          <div class="card-body">
              @include('alert')

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th width="10"> No </th>
                      <th width="550">Nama Pasangan Calon</th>
                      <th width="550">Tps</th>
                      <th>Jumlah</th>
                  </tr>
              </thead>

                @foreach ($paslons as $paslon)
                <tr>
                  <td>{{ $loop->iteration}}</td>
                  <td>{{ $paslon->nama_kepala}}</td>
                  <td>
                    @foreach($tps as $t)
                    {{ $t->nama}} : {{ hitung_suara_by_tps($paslon->id,$t->id) }}
                    <hr>
                    @endforeach
                  </td>
                  <td>
                    {{ hitung_suara($paslon->id)}}
                  </td>
                </tr>
                    
                @endforeach
              </table>

              {{-- <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th width="10"> No </th>
                          <th width="550">Nama Pasangan Calon</th>
                          <th width="550">Tps</th>
                          <th>Jumlah</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($hasil as $hasil)
                      <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $hasil->paslon->nama_kepala }} & {{ $hasil->paslon->nama_wakil}}</td>
                          <td>
                            <table class="">
                              <tr>
                                <td>{{ $hasil->tps->nama }}</td>
                                <td>:</td>
                                <td>{{ hitung_suara_by_tps($paslon_id,$tps_id)}}</td>
                              </tr>

                              <tr>
                                <td>{{ $hasil->tps->nama }}</td>
                                <td>:</td>
                                <td>10</td>
                              </tr>

                              <tr>
                                <td>{{ $hasil->tps->nama }}</td>
                                <td>:</td>
                                <td>10</td>
                              </tr>

                            </table>
                          </td>
                          <td>{{ $hasil->jumlah}}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table> --}}

              <hr>
              <div style="width: 100%">
                {!! $votingChart->container() !!}
            </div>
          </div>
      </div>
  </div>
</section>
@endsection

@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

{!! $votingChart->script() !!}
@endpush