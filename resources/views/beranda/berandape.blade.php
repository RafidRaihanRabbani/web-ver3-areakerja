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
@section('aboutus')
    <section class="relative">

        <div class="col">
            <div class="row">
                <div class="text-left">
                    <div class="mt-5 ml-auto">
                        <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 10pt; color: orange">TEMPAT MENCARI KERJA</h1>
                        <p class="col-sm-6 md-4 mb-5 ml-auto mr-auto"
                            style="font-size: 23pt; font-style: bold; margin: auto 20px; text-align: left; color:black; padding-right: 100pt;">
                            <strong>Temukan Lowongan Kerja
                            Terbaru dengan Mudah</strong>
                        </p>
                        <h2 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 10pt;">Ayo Cari Lowongan Terbaru</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="text-right">
                        <div class="beranda100-pic">
                            <img src="{{ asset('img/beranda1.png') }}" alt="IMG" height="400px" width="400px">
                        </div>
                    </div>
                </div>
            </div>

        <div class="beranda100-pic">
            <img src="{{ asset('img/Desktop.png') }}" alt="IMG" height="450" width="1150" style="padding-left=0">
        </div>
        

        <div class= "beranda100-pic">
            <div class= "text-right">
                <img src="{{ asset('img/18.png') }}" alt="IMG">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="aboutus100-pic">
                    <img src="{{ asset('img/19.png') }}" alt="IMG" height="250px" width="348px">
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 20pt; color: rgb(0, 0, 0)">
                        Tempat Pengembangan Karir Terbaik Untukmu
                    </h1>
                    <p style="font-size: 15pt; font-style: bold; margin: auto 20px; text-align: left; text-indent: 10%;">
                        Beragam pilihan lowongan pekerjaan tersedia untuk kamu, raih kesempatn karir yang lebih besar dengan 
                        mendapatkan pekerjaan yang sesuai dengan
                        spesialisasi, kriteria, dan kemampuan mu 
                        dengan ratusan ribu lowongan pekerjaan yang ada di Area 
                        Kerja.
                    </p>
                </div>
            </div>    
        </div>



        <div class= "mb-4 mt-5 ml-auto mr-auto">
            <div class= "text-left">
                <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 20pt; color: rgb(0, 0, 0)">
                    Tempat Pengembangan Karir Terbaik Untukmu
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="aboutus100-pic">
                    <img src="{{ asset('img/Group.png') }}" alt="IMG" height="400px" width="400px">
                </div>
            </div>
            <div class="col">
                <div class="aboutus100-pic">
                    <img src="{{ asset('img/Step.png') }}" alt="IMG" height="400px" width="400px">
                </div>
            </div>
        </div>



        <a href="rekomendasi">
            <div class= "container-login100-form-btn">
                <div class= "padding-top: 30px">
                    <button class="login100-form-btn">
                        Cari Lowongan
                    </button>
                </div>
            </div>
        </a>
        

    </section>
    <style>
        .login100-form-btn {
        font-family: Montserrat-Bold;
        font-size: 15px;
        line-height: 1.5;
        color: #5b5b5b;
        text-transform: uppercase;
    
        width: 20%;
        height: 50px;
        border-radius: 25px;
        background: #E8E9ED;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 25px;
    
    }
    
    .login100-form-btn:hover {
        font-family: Montserrat-Bold;
        font-size: 15px;
        line-height: 1.5;
        color: #ffffff;
        text-transform: uppercase;
    
        width: 25%;
        height: 50px;
        border-radius: 25px;
        background: #ff8400;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 25px;
    
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }
    </style>
@endsection
