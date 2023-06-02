<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kode Verifikasi</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/img-01(2).png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
    <meta name="keywords" content="halaman masuk">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="Login - Area Kerja">
    <meta property="og:description" content="Masuk dan daftarkan diri anda atau perusahaan anda di Platform lowongan kerja no. 1 di jogja. nikmati firut fitur menarik yang kami berikan">
    <meta property="og:image" content="<?php echo e(asset('img/img-01(2).png')); ?>">
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
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util2.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main2.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <?php if(session()->has('message')): ?>
                <p class="alert alert-info">
                    <?php echo e(session()->get('message')); ?>

                </p>
                <?php endif; ?>
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(asset('img/signin.png')); ?>" alt="IMG"> </a>
                </div>

                <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <span class="login100-form-title">
                        Kode Verifikasi
                    </span>

                    <div class="text-right p-t-12">
                        <a class="txt1" style= "color: grey">
                            Kami telah mengirimkan kode verifikasi ke email Anda 
                        </a>
                    </div>

                    <div class="text-right p-t-12">
                        <a class="txt2" style= "color: orange">
                            cust.areakerja@gmail.com
                        </a>
                    </div>

                    <div class="inputfield">
                        <input type="number" maxlength="1" class="input" active />
                        <input type="number" maxlength="1" class="input" active />
                        <input type="number" maxlength="1" class="input" active />
                        <input type="number" maxlength="1" class="input" active />
                        <input type="number" maxlength="1" class="input" active />                            <input type="number" maxlength="1" class="input" active />
                    </div>
                
                    <div class="text-right p-t-12">
                        <a class="txt3" style= "color: orange" href="<?php echo e(route('Lupapassper')); ?>">
                            Kirim kode ulang
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Submit
                        </button>
                    </div>

                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .inputfield {
          width: 100%;
          display: flex;
          justify-content: space-around;
        }
        .input {
          height: 2em;
          width: 1.5em;
          border: 1px solid #dad9df;
          outline: none;
          text-align: center;
          font-size: 1.5em;
          border-radius: 0.5em;
          background-color: #ffffff;
          outline: none;
          /*Hide number field arrows*/
          -moz-appearance: textfield;
        }
        
        .input:disabled {
            color: #89888b;
        }
        .input:focus {
            border: 3px solid #ffb800;
        }
        
        
    </style>
</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/auth/verifikasi.blade.php ENDPATH**/ ?>