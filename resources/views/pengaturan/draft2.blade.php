<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pengaturan</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/img-01.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
    <meta name="keywords" content="halaman masuk">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Pengaturan - Area Kerja">
    <meta property="og:description" content="Masuk dan daftarkan diri anda atau perusahaan anda di Platform lowongan kerja no. 1 di jogja. nikmati firut fitur menarik yang kami berikan">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
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

    <div class="limiter">
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

                <div class= "button" style= "margin-bottom: 100px;">
                    <div class="container-peng100-form-btn" style="width: 30%; margin-right: 20px; float: left">
                        <button class="peng100-form-btn" onclick="myFunction1()" type="button" data-toggle="modal">
                            Profile
                        </button>
                    </div>
                    <div class="container-peng100-form-btn" style="width: 30%; margin-right: 20px; float: left">
                        <button class="peng100-form-btn" onclick="myFunction1()" type="button" data-toggle="modal">
                            Alamat
                        </button>
                    </div>
                    <div class="container-peng100-form-btn" style="width: 10%; float: left">
                        <button class="peng100-form-btn" onclick="myFunction1()" type="button" data-toggle="modal">
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>



                <div class= "Description" style= "background-color: #FFF0E2; margin-up: 40px">
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
        </form> 
    </div>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function myFunction1() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>

</html>