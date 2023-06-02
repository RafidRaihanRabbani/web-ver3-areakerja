
<?php $__env->startSection('meta'); ?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:title" content=" - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="<?php echo e(asset('img/img-01(2).png')); ?>">
<meta name="description" content="Areakerja adalah perusahaan berbasis teknologi informasi yang berpusat di Yogyakarta. Perusahaan ini berfokus pada platform untuk mencari lowongan kerja di Daerah Istimewa Yogyakarta (DIY).">
<meta name="keywords" content="Tentang Kami">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
<section class="relative" id="home">
    <div class="banner-hunter">
        <div class="row align-items-center" style="margin-right: 15px; margin-left: -600px; margin-bottom: 250px; margin-top: 30px;">
            <div class="banner-content col-lg-12">
                <h1 style="color: #ffffff; font-size: 50px; margin-right: 290px;">
                    <strong>Talent</strong>
                </h1>
                <h2 style="color: #ffffff; font-size: 50px; margin-bottom:5px; margin-right: 278px;">
                    <strong>Hunter</strong>
                </h2>
                <h6 style="color: #ffffff; margin-right: 155px; ">
                    Daftarkan perusahaan anda dan biar kami
                </h6>
                <h6 style="color: #ffffff; margin-right: 95px; ">
                    yang mencarikan kandidat yang cocok untuk anda
                </h6>
                <a href="<?php echo e(route('landing3')); ?>">
                <button class="btn btn-lg mt-3" style= "margin-bottom: 600px padding-left: -290px;"
                style="background:#fe7b54; color:white;" type="button" 
                data-toggle="modal" data-target="#modalDaftar">Daftar</button>
                </a>
            </div>
        </div>
    </div>

</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('aboutus'); ?>
    <section class="relative" id="home">

        <div class="container" style= "margin: 30px">
            <h2 style="font-weight: normal; color: #2F4858; margin-right: 260px;" class=" text-right ">Langkah-Langkah</h2>
            <h2 style="font-weight: normal; color: #2F4858; margin-right: 230px; margin-bottom: -50px" class=" text-right ">Daftar Talent Hunter</h2>
            

            <div class="row">
                <div class="col-md-6" style="overflow:hidden">
                    <img src="<?php echo e(asset('img/hunter1.png')); ?>" alt="" class="img-fluid" style="margin-top:-0px; width: 700px; margin-right: 15px;">
                </div>
                <div class="col-md-6" style= "margin-bottom: -20px;">
                   <ul class="h-100" style="list-style:none; display:flex; flex-direction: column; justify-content: center; padding-bottom: -50px">
                       <li>
                           <div class="d-flex align-items-center mb-3" >
                            <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px ">
                                01
                            </h2>
                            <h4 class="m-0" style= "font-weight: normal; color: #2F4858;  margin: 5px">
                                Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                            </h4>
                           </div>
                       </li>
                       <li>
                            <div class="d-flex align-items-center mb-3" >
                                <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px">
                                    02
                                </h2>
                                <h4 class="m-0" style= "font-weight: normal; color: #2F4858;  margin: 5px">Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                                </h4>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center mb-3" >
                                <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px">
                                    03
                                </h2>
                                <h4 class="m-0" style= "font-weight: normal; color: #2F4858;  margin: 5px">
                                    Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                                </h4>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center mb-3" >
                                <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px">
                                    04
                                </h2>
                                <h4 class="m-0"style= "font-weight: normal; color: #2F4858;  margin: 5px">
                                    Lorem ipsum dolor sit amet consectetur. Diam et a tristique.
                                </h4>
                            </div>
                        </li>
                    </ul>
               </div>
            </div>
        </div>

        <div class="container" style="margin-top: 55px">
            <h2 style="font-weight: normal; color: #F26419;" class=" text-center ">Benefit Talent Hunter</h2>
            <hr class= "hrareakerja2" >
            <div class="row">
                <div class="col-md-12" style= "padding-above: 30px; padding bottom: 90px">
                    <ul class="h-100" style="list-style:none; display:flex; flex-direction: row; justify-content: center;">
                        <li>
                            <div class="col-md-3" >
                             <h2 class="col-md-3" style="color: #F26419;">
                                <img src="<?php echo e(asset('img/Mp.png')); ?>" style=  "width: 90px; height: 90px; margin: 30px">
                             </h2>
                             <h4 class="m-0" style="color: #F26419;">
                                Mendapatkan kandidat sesuai kebutuhan perusahaan
                             </h4>
                            </div>
                        </li>
                        <li>
                             <div class="col-md-3" >
                                 <h2 class="col-md-3" style="color: #F26419;">
                                    <img src="<?php echo e(asset('img/Mp(1).png')); ?>" style=  "width: 90px; height: 90px; margin: 30px">
                                 </h2>
                                 <h4 class="m-0" style="color: #F26419;">Kandidat yang didapatkan dipastikan siap kerja
                                 </h4>
                             </div>
                         </li>
                         <li>
                             <div class="col-md-3" >
                                 <h2 class="col-md-3o" style="color: #F26419;">
                                    <img src="<?php echo e(asset('img/Mp(2).png')); ?>" style=  "width: 90px; height: 90px; margin: 30px">
                                 </h2>
                                 <h4 class="m-0" style="color: #F26419;">
                                    Mempermudah perusahaan dalam penyaringan kandidat
                                 </h4>
                             </div>
                         </li>
                         <li>
                             <div class="col-md-3" >
                                 <h2 class="col-md-3" style="color: #F26419;">
                                    <img src="<?php echo e(asset('img/Mp(3).png')); ?>" style=  "width: 90px; height: 90px; margin: 30px">
                                 </h2>
                                 <h4 class="m-0" style="color: #F26419;">
                                    Jaminan ganti kandidat yang baru jika tidak cocok
                                 </h4>
                             </div>
                         </li>
                    </ul>
               </div>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/talent/hunter.blade.php ENDPATH**/ ?>