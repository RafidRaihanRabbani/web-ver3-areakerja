<header class="header-area" id="header">
    <div class="container">
        <div class="row">

            <div class="col-lg-10">
                <div class="container header-nav">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/img-01(2).png') }}" style="width:60px;" alt="" title="" />
                    <ul class="col row"
                    style= "md-2 mb-3 mr-auto">
                        {{-- <li>
                            <a href= #>Artikel</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('aboutus') }}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('rekomendasi') }}">Lowongan</a>
                        </li>
                        <li>
                            <a href="{{ route('artikel') }}">Tips Kerja</a>
                        </li>
                        <li>
                            <a href="{{ route('FAQ') }}">Kandidat</a>
                        </li>
                    </ul>
                    </a>
                </div>

            </div>


</header>

<header class="page-header d-md-none d-lg-none d-xl-none" style="background-color: #303030">

    <!-- header Elements -->
    <div class="container text-center mb-3 pt-4" >
        <div id="logo-f">
            <a href="{{ route('home') }}"><img src="{{ asset('img/img-01(2).png') }}" style="width:50px;" alt="" title="" /></a>
        </div>
    </div>


</header>
