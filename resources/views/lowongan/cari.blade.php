<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cari Lowongan</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/img-01(2).png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
    <meta name="keywords" content="halaman masuk">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Lupa Password - Area Kerja">
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
    <div class="col-lg-8">
        <div class="container header-nav">
            <a href="{{ route('home') }}"><img src="{{ asset('img/img-01(2).png') }}" style="width:50px;" alt="" title="" /></a>
            <ul class="top-left"> </ul>
        </div>
    </div>

    @section('content')
    <div class="card-deck mb-4">
        @foreach ($article as $art)
            <div class="col-sm-4 my-2">
                <a href="{{ route('artikel.show', [Str::slug($art->judul)]) }}" style="color: black">
                    <div class="card post-list2 ml-auto mr-auto" style="height: 100%;">
                        @if ($art->gambar)
                            <img class="card-img-top" src="{{ url('img/artikel') }}/{{ $art->gambar }}"
                                alt="Card image cap"
                                style="width: inherit;height: 30vh;object-fit: cover;border-radius:15px">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title ">{{ $art->judul }}</h5>
                            <p class="card-text">{{ $art->ringkasan }}</p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    @endsection

</body>
</html>