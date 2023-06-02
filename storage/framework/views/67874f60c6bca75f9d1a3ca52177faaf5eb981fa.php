<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pengaturan</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/img-01.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
    <meta name="keywords" content="halaman masuk">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="Pengaturan - Area Kerja">
    <meta property="og:description" content="Masuk dan daftarkan diri anda atau perusahaan anda di Platform lowongan kerja no. 1 di jogja. nikmati firut fitur menarik yang kami berikan">
    <meta property="og:image" content="<?php echo e(asset('img/img-01.png')); ?>">
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
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  border-radius: 20px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes  animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

</style>

<body>

    <div class="limiter">
        <div class="container-peng100">
            <div class= "text-left" >
                <h1 style="font-weight: normal" class=" text-center mb-3">
                    <strong>Pengaturan Akun</strong> 
                </h1>
                <h2 style="font-weight: normal; " class=" text-center mb-3">
                    <strong>Perusahaan A</strong> 
                </h2>
            </div>
            <div class="wrap-peng101">
                <form class="peng100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="container-peng100-form-btn" style="width: 268%;">
                        <button class="peng100-form-btn" onclick="myFunction()" type="button" data-toggle="modal">
                            Ganti Password
                        </button>
                    </div>


                    <div id="myDIV">
                        <form class="peng100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>" style= "padding-top: 10px">
                            <?php echo e(csrf_field()); ?> 
                            <div class="wrap-input101 validate-input" data-validate="Masukan Password baru">
                                <label> Kata Sandi Lama</label>
                                <input id="password" class="input101 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="new-password" type="password" name="password" placeholder="Kata Sandi Lama" style= "margin-left: 450px">
                    
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback" role="alert">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <span class="focus-input100"></span>
                            </div>
                    
                            <div class="wrap-input101 validate-input" data-validate="Masukan Password baru">
                                <label> Kata Sandi Baru</label>
                                <input id="password-confirm" class="input101" required autocomplete="new-password" type="password" name="password_confirmation" placeholder="Kata Sandi Baru" style= "margin-left: 450px">
                                <span class="focus-input100"></span>
                            </div>

                            <hr class= "hrareakerja" style="width: 220%; height: 5px; color:#C5C5C5;background-color:#C5C5C5;">

                            <div class="wrap-input101 validate-input" data-validate="Masukan Password baru">
                                <label> Kode Verifikasi</label>
                                <input id="password-confirm" class="input101" required autocomplete="new-password" type="password" name="password_confirmation" placeholder="Ulangi Kata Sandi" style= "margin-left: 450px">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="container-peng100-form-btn">
                                <button onclick="document.getElementById('id1').style.display='block'" class="peng100-form-btn" style="width:auto;">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                    

                    <div class="container-peng100-form-btn" style="width: 80%;">
                        <button class="peng100-form-btn" onclick="myFunction1()" type="button" data-toggle="modal">
                            Ganti Email
                        </button>
                    </div>

                    <div id="myDIV2">
                        <form class="peng100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>" style= "padding-top: 10px">
                            <?php echo e(csrf_field()); ?>

                            
                            <div class="wrap-input101 validate-input" data-validate="Masukan Email Baru">
                                <label> Masukan Email Baru</label>
                                <input id="email-baru" class="input101" required autocomplete="email-baru" type="text" name="email_baru" placeholder="Masukan Email Baru" style= "margin-left: 450px">
                                <span class="focus-input100"></span>
                            </div>
                            
                            <div class="wrap-input101 validate-input" data-validate="Masukan kata sandi">
                                <input id="password" class="input101 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="new-password" type="password" name="password" placeholder="Masukan kata sandi" style= "margin-left: 450px">
                                <label> Masukan kata sandi</label>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback" role="alert">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <span class="focus-input100"></span>
                            </div>

                            <div class="container-peng100-form-btn">
                                <button onclick="document.getElementById('id2').style.display='block'" class="peng100-form-btn" style="width:auto;">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="id1" class="modal">
  
                        <form class="modal-content animate" action="/action_page.php" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id1').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
                            </div>
                        
                            <div class="container">
                                
                                <div class="header" style="margin-bottom: 126px">
                                    <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
                                    <h1 style= "margin-left: 310px; margin-top: 20px; font-size: 20px;">Kata sandi anda telah di ganti</h1>
                                </div>
                        
                            </div>
                        </form>
                    </div>

                    <div id="id2" class="modal">
  
                        <form class="modal-content animate" action="/action_page.php" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id2').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
                            </div>
                        
                            <div class="container">
                                
                                <div class="header" style="margin-bottom: 126px">
                                    <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
                                    <h1 style= "margin-left: 290px; margin-top: 20px; font-size: 20px;">Alamat email anda telah di ganti</h1>
                                </div>
                        
                            </div>
                        </form>
                    </div>
    
                </form>
            </div>
        </div>
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

// Get the modal
var modal = document.getElementById('id1');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
var modal = document.getElementById('id2');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



</script>

</body>

</html><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/pengaturan/pengaturan.blade.php ENDPATH**/ ?>