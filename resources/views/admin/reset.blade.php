<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/img-01(2).png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
    <meta name="keywords" content="halaman masuk">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Login - Area Kerja">
    <meta property="og:description" content="Masuk dan daftarkan diri anda atau perusahaan anda di Platform lowongan kerja no. 1 di jogja. nikmati firut fitur menarik yang kami berikan">
    <meta property="og:image" content="{{ asset('img/img-01(2).png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main2.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--===============================================================================================-->
</head>

<body>
<div class="limiter">
    
    <div class="container-login100" style= "background:linear-gradient(300.86deg, #F26419 16.15%, #FF9E00 99.77%)">
        <div class= "header">
            <div class="login100-pic js-tilt" style= "text-align: right">
              <a href="{{ route('home') }}">
                  <img src="{{ asset('img/AREAKERJA1.png') }}" alt="IMG" style= "width: 200px; margin-left: 850px; margin-bottom: 500px">
              </a>
            </div>
            <div class="login100-pic js-tilt" style= "text-align: right">
              <a href="{{ route('adminveri') }}">
                  <img src="{{ asset('img/Vector1.png') }}" alt="IMG" style= "width: 18px; margin-right: 200px; margin-top: -1290px; margin-right: 350px">
              </a>
            </div>
        </div>
          
        <div class="col-lg-4" style= "border-radius: 63px; background:#ffffff; padding: 50px; margin-right: 300px; margin-top: -100px; padding-bottom: 100px;">
            <form class="reset100-form validate-form" method="POST" action="{{ route('resetpass') }}">
                @csrf
                <span class="reset100-form-title" style="color: #F26419">
                    Lupa Password
                </span>

                <div class="lock">
                    <img src="{{ asset('img/Vector.png') }}" alt="IMG" style= "width: 70px; margin-left: 110px; padding-bottom: -30px; margin-bottom:-10px"> </a>
                </div>

                <div class="text-right p-t-12" style= "margin-bottom: 10px;">
                    <a class="txt1" style= "color: rgb(0, 0, 0); margin-right: 60px;  font-size: 11px">
                        <strong>Masukan kata sandi baru anda.</strong>
                    </a>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Masukan Password baru">
                    <input id="password" class="input100 @error('password') is-invalid @enderror" required autocomplete="new-password" type="password" name="password" placeholder="Kata Sandi">

                    @error('password')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Masukan Password baru">
                    <input id="password-confirm" class="input100" required autocomplete="new-password" type="password" name="password_confirmation" placeholder="Ulangi Kata Sandi">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-super100-form-btn">
                    <button class="super100-form-btn" type="home" href{{route ('login')}}>
                        Kirim
                    </button>
                </div>
            </form>
        </div>
        <div class="image">
            <div class="female" style= "margin-top: -455px">
              <img src="{{ asset('img/Ellipse369.png') }}" alt="IMG" style= "width:50%; margin-left: -50px">
              <img src="{{ asset('img/female.png') }}" alt="IMG" style= "width: 20%; margin-left: -530px; margin-top: 80px">
            </div>
            <div class="male" style= "margin-left: 850px; margin-right: -50px; margin-top: -250px">
              <img src="{{ asset('img/Ellipse371.png') }}" alt="IMG" style= "width:120%; margin-top: -10px; margin-left: -100px" >
              <img src="{{ asset('img/male.png') }}" alt="IMG" style= "width:50%; margin-top: -300px; margin-left: 130px">
            </div>
          </div>
    </div>
</div>
</body>


</html>
