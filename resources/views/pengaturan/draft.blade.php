@section('meta')
    <meta name="description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda"/>
    <meta name="keywords" content="Pasang Lowongan di Areakerja.com"/>
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} - Area Kerja">
    <meta property="og:description"
        content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/68eba8d306.css" crossorigin="anonymous">
@endsection

@section('home')
    <section class="relative">
        <form class= "profile">
            <div class="col-lg-8">
                <div class="wrap-input100 validate-input" data-validate="Nama Perusahaan">
                    <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Nama Perusahaan" autofocus>

                    @error('name')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Bidang perusahaan">
                    <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Bidang" autofocus>

                    @error('name')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Bidang perusahaan">
                    <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Alamat" autofocus>

                    @error('name')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    <span class="focus-input100"></span>
                </div>

                <div class= "col">
                    <div class= "form-file">
                        <label for="formFileLg" class="form-label">Upload Pas Photo</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                </div>

                <div class= "Description" style= "background-color: #FFF0E2">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><strong>Deskripsi</strong></label>
                        <textarea class="form-control" id="message-text" style= "background-color: #FFF0E2"></textarea>
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="focus-input100">Badan Usaha</span>
                    <input type="text" name="text">
                    
                </div>

                <div class= "visi">
                    <h1> Visi & Misi</h1>
                    <div class="wrap-input100 validate-input">
                        <span class="focus-input100">1. Visi</span>
                        <input type="text" name="text">
                        <div class="container-super100-form-btn">
                            <button class="super100-form-btn" type="home" href{{route ('login')}}>
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
                <div class= "Misi">
                    <div class="wrap-input100 validate-input">
                        <span class="focus-input100">2. Misi</span>
                        <input type="text" name="text">
                        <div class="container-super100-form-btn">
                            <button class="super100-form-btn" type="home" href{{route ('login')}}>
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>

                <div class= "lowongan">
                    <div class="container-super100-form-btn" style= "padding-top: 10px; padding-bottom: 30px">
                        <button class="super100-form-btn" type="home" href{{route ('login')}}>
                            Lowongan
                        </button>
                    </div>
                    <div class= "tambah" style= "padding-bottom: 10px; margin-left: -580px">
                        <div class= "container" style= "background-color: #FFF0E2; height: 250px; width: 200px; padding-top: 10px; padding-bottom: 10px; border-radius: 25px">
                            <div class= "container" style= "background-color: #FF9837; height: 150px; margin-top: 40px; border-radius: 25px">
                                <a class="txt2" href="{{ route('adminlupa') }}" style="color: #ffffff; font-size: 50px; margin-right: -50px;">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2" style= "float: right; margin-top: -600px; border-style: solid; border-color: #FF9837; border-radius: 25px;">
                <div class= "container"></div>
                    <div class= "Website" style= "padding-top: 50px;">
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Website</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                    <div class= "Telepon">
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Telepon</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                    <div class= "Whatsapp">
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Whatsapp</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                    <div class= "Misi">
                        <div class="wrap-input100 validate-input" style= "padding-bottom: 50px;">
                            <span class="focus-input100">Email</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>  
</section>
@endsection

