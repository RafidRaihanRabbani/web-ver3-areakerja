

<?php $__env->startSection('meta'); ?>
    <meta name="description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda"/>
    <meta name="keywords" content="Pasang Lowongan di Areakerja.com"/>
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
    <meta property="og:description"
        content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda">
    <meta property="og:image" content="<?php echo e(asset('img/img-01.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/68eba8d306.css" crossorigin="anonymous">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('home'); ?>
    <section class="relative">
        <img src="<?php echo e(url('img/chat_me.png')); ?>" onclick= "location.href='https://wa.me/6287719999132'" id="myBtn2" title="Go to top"
            class="myBtn2">
            
        <div class="banner" style= "padding-bottom: 100px">
            <div class= "Pasang">
                <img src="<?php echo e(asset('img/pasang1.png')); ?>" alt="" class="img-fluid" style= "width: 90%; margin-left: 75px">
            </div>
            <div class="row align-items-center" style="margin-right: 15px; margin-left: -420px; margin-bottom: 550px;">
                <div class="banner-content col-lg-12">
                    <h1 style="color: #ffffff; font-size: 50px; margin-right: 250px;">
                        <strong>Pasang</strong>
                    </h1>
                    <h2 style="color: #ffffff; font-size: 50px; margin-right: 180px;">
                        <strong>Lowongan</strong>
                    </h2>
                    
                    <h6 style="color: #ffffff; margin-right: 210px;">
                        Dapatkan karyawan berkualitas
                    </h6>
                    <h6 style="color: #ffffff; margin-right: 270px;">
                        untuk perusahaan anda
                    </h6>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative" id="home">
        <div class="row mb-3 justify-content-around text-center mt-5" style= "padding-top: 250px">
            

            <?php $__currentLoopData = $paket2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-4 ">
                    <a href="" data-bs-toggle="modal" data-bs-target="#pop<?php echo e($pak->id); ?>">
                        <div class="card mb-4 form-wrap-main2"
                            style="border-radius: 25px; solid <?php echo e($pak->warna); ?> ">
                            <div class="card-header pt-3 pb-4"
                                style="border-radius:  25px; height: auto;background-color: <?php echo e($pak->warna); ?>">
                                <h1 class="my-0 fw-normal mb-1 text-white text-bold"><?php echo e($pak->nama); ?></h1>
                                <h4 class="my-0 fw-normal text-white"><?php echo e($pak->deskripsi_singkat); ?></h4>
                            </div>
                            <div class="card-body ">
                                <h4 style="font-weight: normal;display: block; line-height: 1.6 !important; ">
                                    <?php echo $pak->deskripsi_full; ?></h4>
                                <div class="col-11 col-sm-10 mx-auto no-padding">
                                    <ul class="text-left mb-4">
                                        <?php $__currentLoopData = $pak->list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fitur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h5 class="mb-3" style="font-weight: normal;"><?php echo $fitur; ?>

                                            </h5>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <hr />
                            </div>
                            <div class="card-footer pt-4 pb-3"
                                style="border-radius:  200px 200px 25px 25px/45px 45px 25px 25px; height: auto;background-color: <?php echo e($pak->warna); ?>">
                                <h3 class="my-0 fw-normal mb-1 text-white" style= "font-size: 15px">Pasang Lowongan
                                    <?php echo e(number_format($pak->harga, 0, '.', '.')); ?>

                                    <img src="<?php echo e(asset('img/Asset12.png')); ?>">
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- PopUp -->
                <div class="modal fade" id="pop<?php echo e($pak->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: <?php echo e($pak->warna); ?>">
                                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white"><?php echo e($pak->nama); ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                 <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="https://wa.me/<?php echo e($c->contact); ?>" style="text-decoration: none">
                                            <center><img src="/img/whatsapp.png" alt="..." style="height: 75px; margin-right: 6px"><span style="font-size: 30px; color: #25b411"><strong><?php echo e($c->name); ?></strong></span></center>
                                            <?php if(!($c->id == $contacthr->id)): ?>
                                                <hr>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="" style="margin-bottom: 30px"></div>
                                <p style="font-size: 20px; color: black">Tim kami akan memberikan bantuan bergabung melalui WhatsApp</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            

            <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-4 ">
                    <a href="" data-bs-toggle="modal" data-bs-target="#pop<?php echo e($pak->id); ?>">
                        <div class="card mb-4 form-wrap-main" style="border-radius: 25px;">
                            <div class="card-header pt-3 pb-4"
                                style="border-radius:  25px; height: auto;background-color: <?php echo e($pak->warna); ?>">
                                <h1 class="my-0 fw-normal mb-1 text-white text-bold"><?php echo e($pak->nama); ?></h1>
                                <h4 class="my-0 fw-normal text-white"><?php echo e($pak->deskripsi_singkat); ?></h4>
                            </div>
                            <div class="card-body ">
                                <h4 style="font-weight: normal;display: block; line-height: 1.6 !important; ">
                                    <?php echo $pak->deskripsi_full; ?></h4>
                                <div class="col-11 col-sm-10 mx-auto no-padding">
                                    <ul class="text-left mb-4">
                                        <?php $__currentLoopData = $pak->list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fitur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h5 class="mb-3" style="font-weight: normal;"><?php echo $fitur; ?>

                                            </h5>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <hr />
                            </div>
                            <div class="card-footer pt-4 pb-3"
                                style="border-radius:  200px 200px 25px 25px/45px 45px 25px 25px; height: auto;background-color: <?php echo e($pak->warna); ?>">

                                <h3 class="my-0 fw-normal mb-1 text-white" style= "font-size: 15px">Pasang Lowongan
                                    <?php echo e(number_format($pak->harga, 0, '.', '.')); ?>

                                    <img src="<?php echo e(asset('img/Asset12.png')); ?>" style="width: 20px">
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- PopUp -->
                <div class="modal fade" id="pop<?php echo e($pak->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: <?php echo e($pak->warna); ?>">
                                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color : white"><?php echo e($pak->nama); ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="https://wa.me/<?php echo e($c->contact); ?>" style="text-decoration: none">
                                            <center><img src="/img/whatsapp.png" alt="..." style="max-height: 75px; margin-right: 6px"><span style="font-size: 30px; color: #25b411"><strong><?php echo e($c->name); ?></strong></span></center>
                                            <?php if(!($c->id == $contacthr->id)): ?>
                                                <hr>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="" style="margin-bottom: 30px"></div>
                                <p style="font-size: 20px; color: black">Tim kami akan memberikan bantuan pemasangan melalui WhatsApp</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('slick'); ?>
    <div class="container">
        <div class= "header" style= "margin-top: 20px">
            <h2 style="font-weight: normal;  margin: 5px; padding-left: 500px;" class=" text-center ">
                <strong>Langkah-Langkah</strong>
            </h2>
            <h2 style="font-weight: normal;  margin: 5px; margin-bottom:-20px; padding-left: 500px;" class=" text-center ">
                <strong>Memasang Lowongan</strong>
            </h2>
        </div>

        <div class="row">
            <div class="col-md-6" style="overflow:hidden">
                <img src="<?php echo e(asset('img/pasang2.png')); ?>" alt="" class="img-fluid" style="margin-top:-0px; width: 100%; margin-left: 50px;">
            </div>

            <div class="col-md-6">
                <ul class="h-100" style="list-style:none; display:flex; flex-direction: column; justify-content: center;">
                   <li>
                      <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px; padding-bottom: 20px" >
                            <h2 class="m-0 mr-2 my-auto">
                                <img src="<?php echo e(asset('img/Ellipse.png')); ?>" alt="" style="width: 13px; margin-right: 10px">
                            </h2>
                            <h4 class="m-0">
                                Pilih paket pemasangan lowongan sesuai yang anda inginkan
                            </h4>
                       </div>
                   </li>
                   <li>
                        <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px" >
                            <h2 class="m-0 mr-2 my-auto">
                                <img src="<?php echo e(asset('img/Ellipse.png')); ?>" alt="" style="width: 13px; margin-right: 10px">
                            </h2>
                            <h4 class="m-0">
                                Kirim materi lowongan via formulir website atau whatsapp kami
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px">
                            <h2 class="m-0 mr-2 my-auto">
                                <img src="<?php echo e(asset('img/Ellipse.png')); ?>" alt="" style="width: 13px; margin-right: 10px">
                            </h2>
                            <h4 class="m-0">
                                Anda akan diberi instruksi pembayaran
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center mb-3" style="font-weight: normal;  margin: 5px">
                            <h2 class="m-0 mr-2 my-auto">
                                <img src="<?php echo e(asset('img/Ellipse.png')); ?>" alt="" style="width: 13px; margin-right: 10px">
                            </h2>
                            <h4 class="m-0">
                                Lowongan anda siap di publish!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('slick2'); ?>
    <div class="container mb-5">
        <h3 style="font-weight: normal; color: #FF9837" class=" text-center mb-3">Kenapa harus Area Kerja ?</h3>
        <hr class= "hrareakerja2" style= "margin-bottom: 30px">
        <div class="col-12 col-sm-11 no-gutters no-padding mt-4 mx-auto ">
            <div class="for_slick_slider3 multiple-items3 mx-auto">
                <div class="items card px-3 form-wrap-main ">
                    <div class="kelebihan">
                        <div style="float:top ; width:auto; margin-left: 90px">
                            <img src="<?php echo e(asset('img/ps.png')); ?>" style= "width: 100px">
                        </div>
                        <div style="float:none; text-align:left; ">
                            <h5 style="font-weight: normal; color: #FF9837; ">Akun media social kami diikuti ratusan ribu pencari kerja 
                                serta memiliki jaringan social media yang lengkap
                            </h5>
                        </div>
                    </div>

                </div>
                <div class="items card px-3 form-wrap-main kelebihan">
                    <div class="kelebihan">
                        <div style="float:top;width:auto; margin-left: 90px">
                            <img src="<?php echo e(asset('img/ps2.png')); ?>" style= "width: 100px">
                        </div>
                        <div style="float:none; text-align:left;">
                            <h5 style="font-weight: normal; color: #FF9837; line-height: 1.65!important">Akun media social kami diikuti ratusan ribu pencari kerja 
                                serta memiliki jaringan social media yang lengkap
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="items card pt-2  px-3 form-wrap-main kelebihan">
                    <div class="kelebihan">
                        <div style="float:top;width:auto; margin-left: 90px">
                            <img src="<?php echo e(asset('img/ps3.png')); ?>" style= "width: 100px">
                        </div>
                        <div style="float:none; text-align:left;">
                            <h5 style="font-weight: normal; color: #FF9837; line-height: 1.65!important">Akun media social kami diikuti ratusan ribu pencari kerja 
                                serta memiliki jaringan social media yang lengkap
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/68eba8d306.js" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pasang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/pasang/paket.blade.php ENDPATH**/ ?>