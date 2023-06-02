

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lupa Password</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/img-01(2).png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
    <meta name="keywords" content="halaman masuk">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="Lupa Password - Area Kerja">
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
                        <img src="<?php echo e(asset('img/Lupa-reset.png')); ?>" alt="IMG"> </a>
                </div>

                <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <span class="login100-form-title">
                        Lupa Password
                    </span>

                    <div class="text-right p-t-12">
                        <a class="txt1" style= "color: grey">
                            Enter your email below to receive your password reset instructions.
                        </a>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" required autofocus placeholder="<?php echo e(trans('global.login_email')); ?>" value="<?php echo e(old('email', null)); ?>" type="text" name="email">
                        <?php if($errors->has('email')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('email')); ?>

                        </div>
                        <?php endif; ?>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="text-right p-t-12">
                        <a class="txt1">
                            Forgot Password?
                        </a>
                    </div>

                    <div class="container-reset100-form-btn">
                        <button class="reset100-form-btn" type="submit" href="<?php echo e(route('resetpass')); ?>">
                            Lupa Password
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Ingat Password kamu?
                        </span>
                        <a class="txt2" href="<?php echo e(route('login')); ?>">
                            Login
                        </a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <!-- gsap -->
    <script src="<?php echo e(asset('js/TweenMax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo e(asset('vendor/bootstrap/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo e(asset('vendor/tilt/tilt.jquery.min.js')); ?>"></script>

    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })

        TweenMax.to(".first", 1.5, {
            delay: .5,
            top: "-100%",
            ease: Expo.easeInOut
        });

        TweenMax.to(".second", 1.5, {
            delay: .7,
            top: "-100%",
            ease: Expo.easeInOut
        });

        TweenMax.to(".third", 1.5, {
            delay: .9,
            top: "-100%",
            ease: Expo.easeInOut
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo e(asset('js/main2.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/auth/lupa.blade.php ENDPATH**/ ?>