@extends('user.main')
@section('meta')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content=" - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="{{ asset('img/img-01(2).png') }}">
<meta name="description" content="Areakerja adalah perusahaan berbasis teknologi informasi yang berpusat di Yogyakarta. Perusahaan ini berfokus pada platform untuk mencari lowongan kerja di Daerah Istimewa Yogyakarta (DIY).">
<meta name="keywords" content="Tentang Kami">
@endsection
@section('home')
<section class="relative" id="home">
    <div class="banner">
        <div class= "ak">
            <img src="{{ asset('img/ak.png') }}" alt="" class="img-fluid" style= "width: 90%; margin-left: 75px">
        </div>
        <div class="row align-items-center" style="margin-right: 15px; margin-left: -420px; margin-bottom: 350px;">
            <div class="banner-content col-lg-12">
                <h1 style="color: #ffffff; font-size: 50px; margin-right: 250px;">
                    <strong>Kandidat</strong>
                </h1>
                <h2 style="color: #ffffff; font-size: 50px; margin-bottom:5px; margin-right: 220px;">
                    <strong>Area Kerja</strong>
                </h2>
                <h6 style="color: #ffffff; margin-right: 190px;">
                    Rekrut karyawan profesional terakreditasi
                </h6>
                <h6 style="color: #ffffff; margin-right: 415px;">
                    Area Kerja
                </h6>
            </div>
        </div>
    </div>
    <div class="container text-center" style= "padding-top: 200px; border-color: solid black;">
        <form action="{{ route('search') }}">
            <div class="col-10 col-sm-10 form-wrap-main">
                <div class="col-10 search">
                    <div class="row">
                        <div class="clearfix visible-xs"></div>
                        <div class="col-4">
                            <select class="default-select3" name="location">
                                <option value="0">Skill</option>
                            </select>
                        </div>
                        <!-- Add clearfix for only the required viewport -->
                        <div class="col-4">
                            <div>
                                <select class="default-select3" name="categories">
                                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                                    <option value="0">Umur</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div>
                                <select class="default-select3" name="type">
                                    <option value="0">Gender</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 text-center ">
                            <div class="col-12 col-sm-3 form-cols" style="margin:auto; padding: 0;">
                                <button type="submit" class="btn btn-area " style="margin: 10px 0; width: 100%;">
                                    <span class="lnr lnr-magnifier"></span> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
