<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/img-01(2).png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
    <meta name="keywords" content="halaman masuk">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Login - Area Kerja">
    <meta property="og:description" content="Masuk dan daftarkan diri anda atau perusahaan anda di Platform lowongan kerja no. 1 di jogja. nikmati firut fitur menarik yang kami berikan">
    <meta property="og:image" content="{{ asset('img/img-01(2).png') }}">
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
        <div class="container-register100">
            <div class="wrap-register100">
                <form class="register100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="register100-form-title">
                        Edit Kandidat
                    </span>

                    <form>
                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama kandidat:</label>
                            <input type="text" class="form-control" id="Nama kandidat">
                      </div>
              
                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Level Skill:</label>
                            <input type="text" class="form-control" id="Level Skill">
                      </div>
              
                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status Perkerjaan *:</label>
                            <input type="text" class="form-control" id="Status Perkerjaan">
                      </div>

                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Divisi Pekerjaan:</label>
                            <input type="text" class="form-control" id="Divisi Pekerjaan">
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Lama Kontrak:</label>
                            <input type="text" class="form-control" id="Lama Kontrak">
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status Perkerjaan:</label>
                            <input type="text" class="form-control" id="Status Perkerjaan">
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Gaji *:</label>
                            <input type="text" class="form-control" id="Gaji">
                     </div>
                     
                     <div class="modal-footer">
                        <button type="button" class="peng100-form-btn">Simpan</button>
                        <button type="button" class="log100-form-btn">Putus Hubungan Kerja</button>
                        <button type="button" class="login100-form-btn">Kembali</button>
                     </div>

                    </form>                    
                </form>
            </div>
        </div>
    </div>

</body>

</html>
