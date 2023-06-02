<footer class="footer-area2" id="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="container footer-nav">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/AREAKERJA.png') }}" style="width:350px; padding-up: 10pt; padding-bottom: 10pt; padding-right: 50pt" alt="" title="" /></a>
                    <h1 style="color: #ffffff; font-size: 10pt; margin-bottom:5px; ">
                        Area Kerja adalah portal yang menyediakan informasi
                    </h1>
                    <h2 style="color: #ffffff; font-size: 10pt; margin-bottom:50px; margin-left:20px;">
                        mengenai lowongan kerja yang ada di Indonesia.
                    </h2>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="container footer-nav">
                    <ul class="bottom" style="padding-left: 300.5px; padding-up: 30px;">
                        <h1 style="color: #ffffff; font-size: 20pt; margin-bottom:5px; ">
                            Area Kerja
                        </h1>
                        <li>
                            <a href="{{ route('aboutus') }}" style="color: #ffffff; font-size: 9pt; padding-left: 70px">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{ route('kontak') }} " style="color: #ffffff; font-size: 9pt; padding-left: 75px">Kontak Kami</a>
                        </li>
                        <li>
                            <a href="{{ route('FAQ') }}" style="color: #ffffff; font-size: 9pt; padding-left: 120px">FAQ</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="footer-social">
                <ul class="row center" style="margin-left:450px;">

                    <li>
                        <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram"
                                style="font-size:24px; color: #ffffff"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-facebook-square"
                                style="font-size:24px; color: #ffffff"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-twitter-square"
                                style="font-size:24px; color: #ffffff"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-linkedin-square"
                                style="font-size:24px; color: #ffffff"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<footer class="page-footer d-md-none d-lg-none d-xl-none" style="background-color: #303030">

    <!-- Footer Elements -->
    <div class="container text-center mb-3 pt-4">
        <div id="logo-f">
            <a href="{{ route('home') }}"><img src="{{ asset('img/img-01(2).png') }}" style="width:50px;" alt="" title="" /></a>
        </div>
    </div>

</footer>
