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
        <div class="container-login100" style= "background:#000000">
            <div class= "col-lg-8" style= "background:#F6AE2D; padding: 50px; padding-above: 178px; padding-bottom: 189px">
                @if(session()->has('message'))
                <p class="alert alert-info">
                    {{ session()->get('message') }}
                </p>
                @endif
                <div class="login100-pic js-tilt">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/AREAKERJA1.png') }}" alt="IMG" style= "width: 120px; margin-bottom: 49px;">
                    </a>
                </div>
                <div class="col-lg-8" style= "color:#ffffff">
                    <h1 style= "font-size: 50px; padding-bottom: 5px"><strong>Tidak ingin repot</strong></h1>
                    <h1 style= "font-size: 50px"><strong>melamar kerja?</strong></h1>
                </div>
                <div class="col-lg-8" style= "color:#ffffff; margin: 10px; padding: 5px;">
                    <h1 style= "font-size: 19px" >Ikutilah pelatihan terakreditasi kami dan biar</h1>
                    <h1 style= "font-size: 19px">perusahaan yang merekrut anda!</h1>
                </div>

            </div>

            <div class="col-lg-4" style= "background:#ffffff; padding: 50px; padding-above: 300px; padding-bottom: 253px;" >
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <span class="login100-form-title">
                        Masuk
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Email salah, coba lagi ">
                        <input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}" type="text" name="email">
                        @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate=" Password salah, coba lagi atau klik Lupa sandi untuk mereset">
                        <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}" type="password" name="password">
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                        <span class="focus-input100"></span>
                    </div>

                    <label class="container" style= "font-size: 10px"> 
                        <input type="checkbox" checked="checked">
                        <span class="checkmark">Ingat Saya</span>
                    </label>
                    <div class="text-right p-t-12" style= "padding-right: 150px; margin-right: 15px">
                        <a class="txt2" href="{{ route('Lupapasspela') }}">
                            Lupa Kata Sandi?
                        </a>
                    </div>
               
                    <div class="container-login101-form-btn" style= "padding-left: 150px; margin-bottom: 40px">
                        <button class="login101-form-btn" type="button" href="{{route ('home') }}" style= "width: 40%">
                            Daftar
                        </button>
                        <button class="home101-form-btn" type="submit" href="{{route ('home') }}" style= "width: 40%">
                            Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
