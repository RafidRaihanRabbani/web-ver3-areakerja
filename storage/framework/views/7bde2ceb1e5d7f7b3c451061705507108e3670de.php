<!DOCTYPE html>
<html lang="en">

<head>
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
<?php echo $__env->make('user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('home'); ?>

    <div class="limiter">
        <div class= "col">
            <div class= "row">
                <div class= "text-left">
                    <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 20pt; color: rgb(0, 0, 0)">
                        Frequently Asked Questions</h1>
                    <p class="mt-9 md-4 ml-auto mr-auto"
                        style="font-size: 15pt; font-style: bold; margin: auto 20px; text-align: left;">
                        This is a big one and i consider it one of the most important 
                        things for a designer to get right.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <h2>How Long Will It Take For My Order To Arrive After I Make Payment?</h2>
            <p class="dropdown-click">
              <span class="w3-dropdown-content">
                <p class="mt-9 md-4 ml-auto mr-auto"
                style="font-size: 15pt; font-style: bold; margin: auto 20px; text-align: left;">
                Domestic orders normally arrive within 3-7 days of shipping, unless otherwise noted.

                International orders normally arrive within 2-4 weeks of shipping. Please note that 
                these orders need to pass through the customs office in your country before it will 
                be released for final delivery, which can occasionally cause additional delays.
              </span>
            </p>
        </div>

        <div class="container">
            <h2>How Can I Change My Shipping Address?</h2>
            <p class="dropdown-click">
              <span class="dropdown-content"></span>
            </p>
        </div>

        <div class="container">
            <h3>How Can I Track My Orders & Payment?</h3>
            <p class="dropdown-click">
              <span class="dropdown-content"></span>
            </p>
        </div>

        <div class="container">
            <h4>Why Must I Make Payment Immediately At Checkout?</h4>
            <p class="dropdown-click">
              <span class="w3-dropdown-content w3-green w3-padding"></span>
            </p>
        </div>

        <div class="container">
            <h5>What Happens if There's Been A Delivery Mishap To My Order?</h5>
            <p class="dropdown-click">
              <span class="dropdown-content w3-green w3-padding"></span>
            </p>
        </div>
    </div>
    <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>


</html>
<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/faq/FAQ.blade.php ENDPATH**/ ?>