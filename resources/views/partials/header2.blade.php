<nav class="navbar navbar-expand-lg navbar-light" id="header" id="home" style="background:transparent">
    <div class="container">
        <div id="logo2" class="navbar-brand animate__animated animate__flipInX">
            <a href="{{ route('home') }}"><img src="{{ asset('img/AREAKERJA (2) 1.png') }}" style="width:180px;" alt="" title="" /></a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigaation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mb-2 mb-md-0 mr-2">
                    <a role="button" class="nav-link form-pasang5" href="{{ route('hunter') }}"
                        style="color: #000000; font-size: 14px; background-color: #fe7c5400; font-weight:600">
                        Talent Hunter
                    </a>
                </li>

                <li class="nav-item mb-2 mb-md-0 mr-3">
                    <a role="button" class="nav-link form-pasang px-2 " href="{{ route('AK') }}"
                        style="color: #000000; background-color: #fe7c5400; width:max-content; font-weight:600">
                        Kandidat <img src="{{ asset('img/img-01(2).png') }}" style="width:20px;" alt="" title="" />
                    </a>
                </li>

                <li class="nav-item mb-2 mb-md-0 mr-2">
                    <a role="button" class="nav-link form-pasang5" href="{{ route('pelamar') }}"
                        style="color: #000000; font-size: 14px;  font-weight:600">
                        Pelamar
                    </a>
                </li>

                <li class="nav-item mb-2 mb-md-0 mr-2">
                    <a role="button" class="nav-link form-pasang5" href="{{ route('pilihpaket') }}"
                        style="color: #000000; font-size: 14px;  font-weight:600">
                        Pasang Lowongan
                    </a>
                </li>

                <li class= "nav-item">
                    <a role="button" class="nav-link form-pasang5" href="#"
                        style="color: #FF9837; font-size: 14px;  font-weight:600">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </a>

                </li>

                <li class="nav-item">
                    <a role="button" class="nav-link form-pasang px-2 " href="{{ route('pilihpaket') }}"
                        style="color: #000000; width:max-content; font-weight:600">
                        User
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
