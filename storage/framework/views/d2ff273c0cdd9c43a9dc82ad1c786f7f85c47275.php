<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
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
        <div class="container-register100">
            <div class="wrap-register100">
                <form class="register100-form validate-form" method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <span class="register100-form-title">
                        Form Edit Lowongan
                    </span>

                    <form>
                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Paket Kamu:</label>
                            <input type="text" class="form-control" id="Paket Kamu">
                      </div>
              
                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Harga Paket:</label>
                            <input type="text" class="form-control" id="Harga Paket">
                      </div>
              
                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Lowongan:</label>
                            <input type="text" class="form-control" id="Nama Lowongan">
                            <h1 class= "font-size: 10pt"> Jika lebih dari 1 pekerjaan, pisahkan dengan "-". Misal: Desainer - Penulis</h1>
                      </div>
              
                      <div class="checkbox">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
	                        <label class="form-check-label" for="flexCheckDefault">
		                     Pria
	                        </label>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
	                        <label class="form-check-label" for="flexCheckDefault">
		                     Wanita
	                        </label>
                      </div>

                      <div class="form-group">
                            <h1>Umur *</h1>
                            <label for="recipient-name" class="col-form-label">Minimal</label>
                            <input type="text" class="form-control" id="Username">
                            <h2>Sampai Dengan</h2>
                            <label for="recipient-name" class="col-form-label">Maximal</label>
                            <input type="text" class="form-control" id="Username">
                      </div>

                      <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Minimal Pendidikan:</label>
                            <input type="text" class="form-control" id="Minimal Pendidikan">
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Syarat Perkerjaan *:</label>
                            <input type="text" class="form-control" id="Syarat Perkerjaan">
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Deskripsi Perkerjaan *:</label>
                            <input type="text" class="form-control" id="Deskripsi Perkerjaan">
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tambahan:</label>
                            <input type="text" class="form-control" id="Tambahan">
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Batas Lamaran *:</label>
                            <input type="text" class="form-control" id="Batas Lamaran">
                     </div>

                     <div class="form-group">
                            <h1>Kisaran Gaji (Optional) </h1>
                            <label for="recipient-name" class="col-form-label">Minimal</label>
                            <input type="text" class="form-control" id="Minimal">
                            <h2>Sampai Dengan</h2>
                            <label for="recipient-name" class="col-form-label">Maximal</label>
                            <input type="text" class="form-control" id="Maximal">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                     </div>

                     <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Memiliki Banner sendiri:</label>
                            <input type="text" class="form-control" id="Memiliki Banner sendiri">
                            <h1 class= "font-size: 10pt"> ( )Tidak Wajib</h1>
                            <h2 class= "font-size: 10pt"> (*)Wajib di isi</h2>
                     </div>

                     <div class="modal-footer">
                        <button type="button" class="log100-form-btn">Cancel</button>
                        <button type="button" class="login100-form-btn">Next</button>
                     </div>

                    </form>                    
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/perusahaan/editlowongan.blade.php ENDPATH**/ ?>