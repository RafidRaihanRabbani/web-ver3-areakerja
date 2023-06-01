{{-- @extends('layouts.app')
@section('content')

@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="segera daftarkan diri anda dan perusahaan anda di areakerja.com">
    <meta name="keywords" content="halaman pendaftaran">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Register - Area Kerja">
    <meta property="og:description" content="Daftarkan diri anda atau perusahaan anda di Platform lowongan kerja no. 1 di jogja. nikmati firut fitur menarik yang kami berikan">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
    <link rel="shortcut icon" href="img/img-01.png">

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

            <div class="col-lg-4" style= "background:#ffffff; padding: 50px; padding-above: 180px; padding-bottom: 138px;">
                <form class="register100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="register100-form-title">
                        Daftar
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid Name is required">
                        <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Username" autofocus>

                        @error('name')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror

                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid Email is required">
                        <input id="email" class="input100 @error('email') is-invalid @enderror" required autocomplete="email" value="{{ old('email') }}" type="email" name="email" placeholder="Email">

                        @error('email')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror

                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid Email is required">
                        <input id="email" class="input100 @error('email') is-invalid @enderror" required autocomplete="email" value="{{ old('email') }}" type="email" name="email" placeholder="No.Telepon">

                        @error('email')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror

                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid Password is required">
                        <input id="password" class="input100 @error('password') is-invalid @enderror" required autocomplete="new-password" type="password" name="password" placeholder="Kata Sandi">

                        @error('password')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid Password is required">
                        <input id="password-confirm" class="input100" required autocomplete="new-password" type="password" name="password_confirmation" placeholder="Ulang Kata Sandi">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login101-form-btn" style= "padding-above: 10px; margin-above: 10px">
                        <button type="submit" class="login101-form-btn">
                            Daftar Sekarang
                        </button>
                    </div>

                    <label class="container" style= "font-size: 10px"> 
                        <input type="checkbox" checked="checked">
                        <span class="checkmark">Saya menyetujui Syarat dan Ketentuan yang berlaku</span>
                    </label>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
