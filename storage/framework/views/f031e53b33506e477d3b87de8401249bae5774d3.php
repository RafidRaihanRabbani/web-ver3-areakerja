

<?php $__env->startSection('meta'); ?>
    <meta name="description" content="Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda">
    <meta name="keywords" content="Tips Kerja">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
    <meta property="og:description" content="Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda">
    <meta property="og:image" content="<?php echo e(asset('img/img-01(2).png')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('home'); ?>
    <section class="relative" id="home" style="margin-bottom: 50px">
        <div class="banner" style= "padding-bottom: 100px">
            <div class= "pelamar">
                <img src="<?php echo e(asset('img/pelamar.png')); ?>" alt="" class="img-fluid" style= "width: 90%; margin-left: 75px">
            </div>
            <div class="row align-items-center" style="margin-right: 15px; margin-left: -420px; margin-bottom: 350px;">
                <div class="banner-content col-lg-12">
                    <h1 style="color: #ffffff; font-size: 50px; margin-right: 250px;">
                        <strong>Pelamar</strong>
                    </h1>
                    <h6 style="color: #ffffff; margin-right: 210px;">
                        Lihat riwayat lamaran yang masuk

                    </h6>
                    <h6 style="color: #ffffff; margin-right: 325px;">
                        ke lowongan anda.
                    </h6>
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aboutus'); ?>
    <section class="relative" id="home">
        <div class="container" style= "margin: 200px; margin-right: 330px; margin-left: -10px; background:#a52701">
    
            <div class="row">
                <div class="col-md-12" >
                   <ul class="h-100" style="list-style:none; display:flex; flex-direction: column; justify-content: center;">
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
                    </ul>
               </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/pelamar/index.blade.php ENDPATH**/ ?>