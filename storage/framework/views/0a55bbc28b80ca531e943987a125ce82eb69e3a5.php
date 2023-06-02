
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
        <div class="banner-area2"> </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('aboutus'); ?>
    <section class="relative">

        <div class="header">
            <div class="row">
                <div class="text-left">
                    <div class="mt-10 ml-auto mr-5">
                        <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 10pt; color: orange">Dashboard</h1>
                        <p class="mt-9 md-4 ml-auto mr-auto"
                            style="font-size: 20pt; font-style: bold; margin: auto 20px; text-align: left; color:black; padding-bottom: 30px">
                            Selamat Datang di Area Kerja
                        </p>
                        <p class="mt-9 md-4 ml-auto mr-auto"
                            style="font-size: 20pt; font-style: bold; margin: auto 20px; text-align: left; color:black; padding-bottom: 30px">
                            [User]
                        </p>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class= "beranda">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <div class="col-lg-12" style= "background-color: #FFF7E4; padding-bottom: 200px">
                            <h1 class="col-lg-10" style ="font-size: 20pt">Lowongan Saya</h1>
                            <div class="col-lg-10" style= "background-color: #ffffff;">
                                <h1 class="col-lg-10" style ="font-size: 10pt; text-align: left">Lowongan Belum Terpasang</h1>
                                <div class="container-super100-form-btn" style= "text-align: right">
                                    <button class="super100-form-btn" type="home" href<?php echo e(route ('login')); ?>>
                                        Tambah Lowongan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <div class="col-lg-6" style= "background-color: #FFF7E4; padding-bottom: 10px; padding-top: 10px">
                            <div class= "notif" style= "background-color: #ffffff; padding-bottom: 250px; padding-top: 20px ">
                                <h1 style= "color:#ff8400; font-size: 10px">Notifikasi</h1>
                                <hr style= "hrareakerja">
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    

        <div class= "text-center">
            <div class= "mb-4 mt-5 ml-auto mr-auto">
                <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 20pt; color: rgb(0, 0, 0)">
                    Fitur Area Kerja Perusahaan
                </h1>
                <h2 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 15pt; color: #E8E9ED">
                    Check our latest article to get meaningful content or tips for shopping
                </h2>
            </div>
            <div class= "beranda100-pic">
                <img src="<?php echo e(asset('img/Blog.png')); ?>" alt="IMG">
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

        <div class= "text-center">
            <div class= "mb-4 mt-5 ml-auto mr-auto">
                <h1 class="mb-4 mt-5 ml-auto mr-auto" style ="font-size: 20pt; color: rgb(0, 0, 0); padding-bottom: 30px">
                    Tentang Area Kerja
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="group">
                    <img src="<?php echo e(asset('img/Base.png')); ?>" alt="IMG" style= "width: 50%; margin-bottom: -430px">
                    <img src="<?php echo e(asset('img/Group.png')); ?>" alt="IMG" style= "width: 55%; margin-left: 50px; margin-top: -50px">
                </div>
            </div>
            <div class="col">
                <div class="aboutus100-pic">
                    <img src="<?php echo e(asset('img/Step.png')); ?>" alt="IMG" width= "80%" style= "margin-bottom: 200px">
                </div>
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

<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/beranda/berandaper.blade.php ENDPATH**/ ?>