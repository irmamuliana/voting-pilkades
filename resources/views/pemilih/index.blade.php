<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Voting Pilkades</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="#">E-Voting<span>Pilkades</span></a></h1>
      </div>

    </div>
  </header><!-- End Header -->

<div class="card container">
  <h5 class="card-header">Tata Cara Pemilihan</h5>
  <div class="card-body">
    <p class="card-text">1. Tekan tombol <b>PILIH</b> pada kandidat yang akan dipilih.</p>
    <p class="card-text">2. Tekan <b>YA</b> jika anda telah yakin ingin memilih kandidat tersebut & tekan tombol <b>KEMBALI</b> jika anda ingin kembali ke halaman voting.</p>
    <p class="card-text">3. Setiap pemilih hanya bisa melakukan sekali voting.</p>
  </div>
</div> <br/>

  <div class="container">
    <div class="row">
      @foreach($paslons as $paslon)
      <div class="col-md-4">
        <div class="card" style="width: 20rem; padding-top: 2em;">
          <h5 style="text-align: center;"><b style="color: red;">{{ $loop->iteration}}</b></h5>
            <img class="card-img-top" src="paslon/{{ $paslon->foto }}" alt="Card image cap" style="max-height: 20em;">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">{{ $paslon->nama_kepala}}</h5>
                <h5><b style="color: red;">Visi:</b></h5>
                <p class="card-text">{{ $paslon->visi}}</p>
                <h5><b style="color: red;">Misi:</b></h5>
                <p class="card-text" style="height: 20em;">{{ $paslon->misi}}</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal_{{ $paslon->id}}">PILIH</a>
            </div>
        </div>
      </div>
      @endforeach
      </div>
    </div>

 <div class="container">

  @foreach($paslons as $paslon)

  {{ Form::open(['url'=>'voting_save'])}}

  {{ Form::hidden('paslon_id',$paslon->id)}}
  <!-- The Modal -->
  <div class="modal" id="myModal_{{ $paslon->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
          Apakah anda yakin akan paslon {{$paslon->nama_kepala}} dan {{$paslon->nama_wakil}}  kandidat ini ?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Yakin</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        </div>
        
      </div>
    </div>
  </div>
{{ Form::close()}}
  @endforeach()
  
</div>



  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>