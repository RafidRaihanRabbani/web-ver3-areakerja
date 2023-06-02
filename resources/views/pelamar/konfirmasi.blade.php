@extends('user.main')

@section('meta')
    <meta name="description" content="Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda">
    <meta name="keywords" content="Tips Kerja">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} - Area Kerja">
    <meta property="og:description" content="Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda">
    <meta property="og:image" content="{{ asset('img/img-01(2).png') }}">
@endsection

@section('home')
    <section class="relative" id="home" style="margin-bottom: 50px">
        <div class="banner" style= "padding-bottom: 100px">
            <div class= "pelamar">
                <img src="{{ asset('img/pelamar.png') }}" alt="" class="img-fluid" style= "width: 90%; margin-left: 75px">
            </div>
            <div class="row align-items-center" style="margin-right: 15px; margin-left: -420px; margin-bottom: 350px;">
                <div class="banner-content col-lg-12">
                    <h1 style="color: #ffffff; font-size: 50px; margin-right: 250px;">
                        <strong>Pelamar</strong>
                    </h1>
                    <h6 style="color: #ffffff; margin-right: 210px;">
                        Lihat riwayat lamaran yang masuk

                    </h6>
                    <h6 style="color: #ffffff; margin-right: 325px;">
                        ke lowongan anda.
                    </h6>
                </div>
            </div>
    </section>
@endsection

@section('aboutus')
    <section class="relative" id="home">
        <div class="container" style= "margin: 200px; margin-right: 180px; margin-left: -10px; padding: 100px; padding-right: 300px; background:#ffffff">
            <div class= "konfirmasi header">
                <h1 style= "color: black; margin-bottom: 60px; margin-top: -10px">
                    <i class="fa fa-angle-left" aria-hidden="true" style= "color:#FF9837"></i>
                    <strong style= "font-size: 20px">Konfirmasi Terima Lamaran</strong>
                </h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form class="konfirmasi" method="POST" action="{{ route('login') }}" >
                        {{ csrf_field() }}

                        <h4 style= "padding: 20px; font-size: 15px">
                            Silahkan inputkan jadwal wawancara untuk calon kandidat :
                        </h4>
    
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Tanggal*</span>
                            <input type="date" name="date" style="width: 50%; margin-left: 195px">
                            
                        </div>
    
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Pukul*</span>
                            <input type="time" name="time" style="width: 50%; margin-top: 30px; margin-left: 210px">
                            
                        </div>

                        <div class="row mb-3 mt-3">
                            <div class="col-12 text-left">
                                <span class="mb-2" style= "margin-bottom: 250px">Tempat*</span>
                                <div>
                                    <textarea id="alamat" name="alamat" required="" type="text" class="form-control2 "
                                        value="" data-type="text" aria-required="true" style= "width: 52%; margin-left: 240px;">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 mt-3">
                            <div class="col-12 text-left">
                                <span class="mb-2">Catatan</span>
                                <div>
                                    <textarea id="saran" name="saran" required="" type="text" class="form-control2 "
                                        value="" data-type="text" aria-required="true" style= "width: 52%; margin-left: 240px;">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="text-right p-t-12" style= "margin-right: 15px; padding-bottom: 30px;">
                            <a class="txt2" href="{{ route('Keterima') }}" style= "color: #FF9837">
                                Selanjutnya <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>    
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </section>
@endsection
