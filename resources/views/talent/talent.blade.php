@extends('user.main')
@section('meta')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content=" - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="{{ asset('img/AREAKERJA (2) 1.png') }}">
<meta name="description" content="Areakerja adalah perusahaan berbasis teknologi informasi yang berpusat di Yogyakarta. Perusahaan ini berfokus pada platform untuk mencari lowongan kerja di Daerah Istimewa Yogyakarta (DIY).">
<meta name="keywords" content="Tentang Kami">
@endsection
@section('home')
<section class="relative" id="home">
    <div class="banner">
        <div class= "hunter">
            <img src="{{ asset('img/hunter3.png') }}" alt="" class="img-fluid" style= "width: 90%; margin-left: 75px">
        </div>
        <div class="row align-items-center" style="margin-right: 15px; margin-left: -570px; margin-top: -50px">
            <div class="banner-content col-lg-12">
                <h1 style="color: #ffffff; font-size: 50px; margin-right: 200px;">
                    <strong>Talent</strong>
                </h1>
                <h2 style="color: #ffffff; font-size: 50px; margin-bottom:5px; margin-right: 185px;">
                    <strong>Hunter</strong>
                </h2>
                <h6 style="color: #ffffff; margin-right: 63px;">
                    Daftarkan perusahaan anda dan ratusan 
                </h6>
                <h6 style="color: #ffffff; margin-right: 29px;">
                    kandidat terlatih siap untuk perusahaan anda
                </h6>
                <a href="{{ route('berandape') }}">
                <button class="btn btn-lg mt-3" style= "margin-bottom: 600px margin-left: -250px;"
                style="background:#fe7b54; color:white;" type="button" 
                data-toggle="modal" data-target="#modalDaftar">Request Talent</button>
                </a>
            </div>
        </div>
    </div>

</section>

@endsection
@section('aboutus')
    <section class="relative" id="home">

        <div class="container" style= "padding-top: 230px">
            <div class= "header">
                <h2 style="font-weight: normal;  margin: 5px; padding-left: 500px; color: #2F4858;" class=" text-center ">Langkah-Langkah</h2>
                <h2 style="font-weight: normal;  margin: 5px; padding-left: 500px; color: #2F4858;" class=" text-center ">Daftar Talent Hunter</h2>
            </div>
            
            
            <div class="row">
                <div class="col-md-6" style="overflow:hidden">
                    <img src="{{ asset('img/hunter2.png') }}" alt="" class="img-fluid" style="margin-top:-0px; width: 100%; margin-left: 50px;">
                </div>
                <div class="col-md-6">
                   <ul class="h-100" style="list-style:none; display:flex; flex-direction: column; justify-content: center;">
                       <li>
                           <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px" >
                                <h4 class="m-0" style= "color: #2F4858;">
                                    Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                                </h4>
                           </div>
                       </li>
                       <li>
                            <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px" >
                                <h4 class="m-0" style= "color: #2F4858;">
                                    Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                                </h4>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px">
                                <h4 class="m-0" style= "color: #2F4858;">
                                    Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                                </h4>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px">
                                <h4 class="m-0" style= "color: #2F4858;">
                                    Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                                </h4>
                            </div>
                        </li>
                    </ul>
               </div>
            </div>
        </div>

        <div class="container" style="margin-top: 55px">
            <h2 style="font-weight: normal; color: #FF9837;" class=" text-center ">Benefit Talent Hunter</h2>
            <hr class= "hrareakerja2" style= "margin-bottom: 30px">
            <div class="row">
                <div class="col-lg-12" style= "padding-above: 20px">
                    <ul class="h-100" style="list-style:disc; display:flex; flex-direction: row; justify-content: center;">
                        <li>
                            <div class="col-lg-3" >
                                <h2 class="col-lg-3" style="color: #FF9837;">
                                    <img src="{{ asset('img/Mp.png') }}" style=  "width: 90px; height: 90px; margin: 30px">
                                </h2>
                                <h4 class="m-0" style="color: #FF9837;">
                                    Mendapatkan kandidat sesuai kebutuhan perusahaan
                                </h4>
                            </div>
                        </li>
                        <li>
                            <div class="col-lg-3" >
                                <h2 class="col-lg-3" style="color: #FF9837;">
                                    <img src="{{ asset('img/Mp(1).png') }}" style=  "width: 90px; height: 90px; margin: 30px">
                                </h2>
                                <h4 class="m-0" style="color: #FF9837;">
                                    Kandidat yang didapatkan dipastikan siap kerja
                                </h4>
                            </div>
                         </li>
                         <li>
                            <div class="col-lg-3" >
                                <h2 class="col-lg-3o" style="color: #FF9837;">
                                    <img src="{{ asset('img/Mp(2).png') }}" style=  "width: 90px; height: 90px; margin: 30px">
                                </h2>
                                <h4 class="m-0" style="color: #FF9837;">
                                    Mempermudah perusahaan dalam penyaringan kandidat
                                </h4>
                            </div>
                         </li>
                         <li>
                             <div class="col-lg-3" >
                                <h2 class="col-lg-3" style="color: #FF9837;">
                                    <img src="{{ asset('img/Mp(3).png') }}" style=  "width: 90px; height: 90px; margin: 30px">
                                </h2>
                                <h4 class="m-0" style="color: #FF9837; margin: 30px;">
                                    Jaminan ganti kandidat yang baru jika tidak cocok
                                </h4>
                             </div>
                         </li>
                    </ul>
               </div>
            </div>
        </div>

    </section>
@endsection
