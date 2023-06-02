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
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

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
        <div class="container-login100" style= "background:#F6F6F6)">
            <div class="col-lg-6" style= "border-radius: 8px; background:#ffffff; padding: 50px; margin-right: 50px; padding-bottom: 100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class= "header" style= "background: #FF9637; border-radius: 8px; margin-right: -258px; margin-left: -50px; margin-top: -50px">
                        <h1 class="login100-form-title" style= "margin-left: -170px; margin-bottom: -20px; margin-bottom: -20px; color: #3D445A">
                            Welcome Back !
                        </h1>
                        <h1 class="login100-form-title" style= "margin-left: -150px; margin-bottom: -50px; color: #3D445A">
                            Finance Area Kerja
                        </h1>
                        <div class= "image">
                            <img src="{{ asset('img/Rectangle5.png') }}" alt="IMG" style="margin-left: 400px; width: 200px;">
                        </div>
                    </div>
                                
                    <div class="wrap-input101 validate-input" data-validate="Email salah, coba lagi " style= "margin-top: 10px; width: 180%">
                        <label> Username </label>
                        <input class="input101{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="Enter username" value="{{ old('email', null) }}" type="text" name="username" style= "border-style: solid; border-color: #CED4DA;">
                        @if($errors->has('email'))
                        <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                        </div>
                        @endif
                        <span class="focus-input100"></span>
                    </div>
            
                    <div class="wrap-input101 validate-input" data-validate=" Password salah, coba lagi atau klik Lupa sandi untuk mereset" style= "width: 180%">
                        <label> Password </label>
                        <input class="input101{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Enter password" type="password" name="password" style= "border-style: solid; border-color: #CED4DA;">
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                        </div>
                        @endif
                        <span class="focus-input100"></span>
                    </div>

                    <div class= "checkbox">
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me" id="remember_me"> Remember me
                        </label>
                    </div>
                    
                    <div class="container-finance100-form-btn">
                        <button class="finance100-form-btn" type="home" href{{route ('login')}} >
                            Log In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
$(function() {
 
 if (localStorage.chkbx && localStorage.chkbx != '') {
    $('#remember_me').attr('checked', 'checked');
    $('#xip_Name').val(localStorage.usrname);
    $('#xip_Password').val(localStorage.pass);
 } else {
    $('#remember_me').removeAttr('checked');
    $('#xip_Name').val('');
    $('#xip_Password').val('');
 }

 $('#remember_me').click(function() {

  if ($('#remember_me').is(':checked')) {
    // save username and password
    localStorage.usrname = $('#xip_Name').val();
    localStorage.pass = $('#xip_Password').val();
    localStorage.chkbx = $('#remember_me').val();
    } else {
      localStorage.usrname = '';
      localStorage.pass = '';
      localStorage.chkbx = '';
    }
  });
});
</script>

</html>
