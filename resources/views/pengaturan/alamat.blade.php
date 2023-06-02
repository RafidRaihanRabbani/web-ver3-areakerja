@extends('user.main')
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

                <div class= "container" style= "border-style: solid; border-color: #B1B1B1; border-radius: 25px; padding-top: 20px; padding-bottom: 20px">
                    <div class= "col-lg-12" style= "background-color: #FFF7E4; padding-top: 10px; padding-bottom: 10px">
                        <div class="wrap-input100 validate-input" data-validate="Nama Perusahaan">
                            <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Nama Alamat" autofocus>
        
                            @error('name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
        
                            <span class="focus-input100"></span>
                        </div>
        
                        <div class="wrap-input100 validate-input" data-validate="Bidang perusahaan">
                            <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Provinsi" autofocus>
        
                            @error('name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
        
                            <span class="focus-input100"></span>
                        </div>
        
                        <div class="wrap-input100 validate-input" data-validate="Bidang perusahaan">
                            <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Kabupaten" autofocus>
        
                            @error('name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
        
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Nama Perusahaan">
                            <input id="name" class="input100 @error('name') is-invalid @enderror" required autocomplete="name" value="{{ old('name') }}" type="text" name="name" placeholder="Kecamatan" autofocus>
        
                            @error('name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
        
                            <span class="focus-input100"></span>
                        </div>
        
                        <div class= "Description">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label"><strong>Deskripsi</strong></label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>  
</section>
@endsection

