
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
        <div class="banner-area2">  </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('aboutus'); ?>
    <section class="relative">

        <div class="col">
            <div class="row">
                <div class="text-left">
                    <div class="mt-10 ml-auto mr-5">
                        <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 10pt; color: orange">Recruitment</h1>
                        <p class="mt-9 md-4 ml-auto mr-auto"
                            style="font-size: 20pt; font-style: bold; margin: auto 20px; text-align: left; color:black">
                            Ayo Recruit Tim Kamu 
                            Lewat Area Kerja 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="beranda100-pic">
                    <img src="<?php echo e(asset('img/beranda2.png')); ?>" alt="IMG">
                </div>
            </div>
        </div>    

        
        <div class= "row">
            <div class="col s1"><img src="<?php echo e(asset('img/Illustration.png')); ?>" ></div>
            <div class="col s1">
                <h3 class="mb-3 ml-1">Pasang Lowongan</h3>
                <p class="md-5 mb-3 mr-auto "
                    style="font-size: 15pt; font-style: bold; text-align:  justify; text-indent: 7%; ">
                    Sangat mudah untuk 
                    memasang lowongan
                </p>
            </div>
            <div class="col s1"><img src="<?php echo e(asset('img/018.png')); ?>" ></div>
            <div class="col s1">
                <h4 class="md-7 mb-1 ml-auto mr-auto"
                    style= "font-size: 20pt">Kandidat Siap Kerja
                </h4>
                <p class="md-7 mb-1 ml-auto mr-auto"
                    style="font-size: 15pt; font-style: bold; text-align: justify; text-indent: 7%; ">
                    Area Kerja akan menyediakan 
                    Kandidat Siap Kerja untuk 
                    perusahaaan mu
                </p>
            </div>
        </div>
    </section>
    <style>
        .login100-form-btn {
        font-family: Montserrat-Bold;
        font-size: 15px;
        line-height: 1.5;
        color: #5b5b5b;
        text-transform: uppercase;
    
        width: 20%;
        height: 50px;
        border-radius: 25px;
        background: #E8E9ED;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 25px;
    
    }
    
    .login100-form-btn:hover {
        font-family: Montserrat-Bold;
        font-size: 15px;
        line-height: 1.5;
        color: #ffffff;
        text-transform: uppercase;
    
        width: 25%;
        height: 50px;
        border-radius: 25px;
        background: #ff8400;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 25px;
    
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/Recruitment/recruit.blade.php ENDPATH**/ ?>