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
        <h1 class="text-light"><a href="index.html">E-Voting<span>Pilkades</span></a></h1>
      </div>

    </div>
  </header><!-- End Header -->
<div class="container">
    <div class="row">
        <div class="col-md-12" align="center">

        
  <h4>Silahkan Scan Qr-Code yang terdapat pada Kartu Pemilihan anda ke kamera</h4>
        
        <hr>
        <canvas style="width: 500px"></canvas>
        <hr>
        <div id="message"></div>
        <script type="text/javascript" src="{{asset('webcodecamjs/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('webcodecamjs/js/qrcodelib.js')}}"></script>
        <script type="text/javascript" src="{{asset('webcodecamjs/js/webcodecamjs.js')}}"></script>
        <script type="text/javascript">
        	var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                resultFunction: function(result) {
                	//aChild[txt] = result.format + ': ' + result.code;
                    console.log(result.code);

                    // login ajax ----------------------------------------------------------------

                    $.ajax({
                        url: "qrcode/login",
                        data: { 
                            "nik": result.code
                        },
                        cache: false,
                        type: "GET",
                        success: function(response) {
                            console.log(response);
                            if(response=='user_found')
                            {
                                window.location = "/voting";
                            }else if(response=='sudah_pilih')
                            {
                              $( "#message" ).text( "Akun Anda Sudah Digunakan" );
                                new Audio('sudah_digunakan.mp3').play();
                            }else
                            {
                                $( "#message" ).text( "Data Tidak Ditemukan" );
                                new Audio('tidak_ditemukan.mp3').play();
                            }
                        },
                        error: function(xhr) {
                        }
                    });

                    // end login ajax ----------------------------------------------------------------
                    
                    //document.querySelector('body').appendChild(aChild);
                }
            };
            new WebCodeCamJS("canvas").init(arg).play();
        </script>
</div>
</div>
</div>


  

</body>

</html>