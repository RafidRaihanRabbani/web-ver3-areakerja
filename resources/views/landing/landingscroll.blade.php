{{-- @extends('layouts.app')
@section('content')

@endsection --}}

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
            <div class= "col-lg-8" style= "background:#F26419; padding: 50px; padding-above: 178px; padding-bottom: 178px">
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
                    <h1 style= "font-size: 55px; padding-bottom: 5px"><strong>Tempatnya</strong></h1>
                    <h1 style= "font-size: 55px"><strong>cari kerja</strong></h1>
                </div>
                <div class="col-lg-8" style= "color:#ffffff; margin: 10px; padding: 5px;">
                    <h1 style= "font-size: 19px" >Temukan loker <strong>se-Indonesia</strong> terbaru</h1>
                    <h1 style= "font-size: 19px">dengan mudah!</h1>
                </div>
            </div>

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

            <div class= "col-lg-8" style= "background:#86BBD8; padding: 50px; padding-above: 178px; padding-bottom: 178px;">
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
                    <h1 style= "font-size: 55px; padding-bottom: 5px"><strong>Pasang</strong></h1>
                    <h1 style= "font-size: 55px"><strong>Lowongan</strong></h1>
                </div>
                <div class="col-lg-8" style= "color:#ffffff; margin: 10px; padding: 5px;">
                    <h1 style= "font-size: 19px" >Dapatkan karyawan berkualitas</h1>
                    <h1 style= "font-size: 19px">untuk perusahaan anda!</h1>
                </div>
            </div>

            <div class="container-login100" style= "background:#000000">
                <div class= "col-lg-8" style= "background:#33658A; padding: 50px; padding-above: 185px; padding-bottom: 203px">
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
                        <h1 style= "font-size: 55px; padding-bottom: 20px"><strong>Talent Hunter</strong></h1>
                    </div>
                    <div class="col-lg-8" style= "color:#ffffff; margin: 10px; padding: 5px;">
                        <h1 style= "font-size: 19px" >Daftarkan perusahaan anda & biar kami</h1>
                        <h1 style= "font-size: 19px">yang mencarikan kandidat untuk perusahaan anda!</h1>
                    </div>
                </div>            
            </div>

            <div class="container-login100" style= "background:#000000">
                <div class= "col-lg-8" style= "background:#2F4858; padding: 50px; padding-above: 178px; padding-bottom: 189px">
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
                        <h1 style= "font-size: 45px; padding-bottom: 5px"><strong>Rekrut karyawan
                            </strong></h1>
                        <h1 style= "font-size: 50px"><strong>profesional</strong></h1>
                    </div>
                    <div class="col-lg-8" style= "color:#ffffff; margin: 10px; padding: 5px;">
                        <h1 style= "font-size: 19px" >Rekrut karyawan berkualitas terakreditasi</h1>
                        <h1 style= "font-size: 19px">Areakerja untuk perusahaan anda!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
