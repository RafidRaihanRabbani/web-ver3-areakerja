
<?php $__env->startSection('meta'); ?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="<?php echo e(asset('img/img-01.png')); ?>">
<meta name="description" content="Areakerja adalah perusahaan berbasis teknologi informasi yang berpusat di Yogyakarta. Perusahaan ini berfokus pada platform untuk mencari lowongan kerja di Daerah Istimewa Yogyakarta (DIY).">
<meta name="keywords" content="Tentang Kami">p
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
    <section class="relative" id="home">
        <div class="banner-area2">
            <div class="overlay overlay-bg container">
                <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                    Areakerja.com > Tentang Kami
                </h4>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('aboutus'); ?>
    <section class="relative">
        <div class="container text-center">
            <div class="col-12 col-sm-8 mb-5 ml-auto mr-auto form-wrap-main">
                <h1 class="mb-3 mt-3">Tentang Kami</h1>
                <p class="mb-3"
                    style="font-size: 13pt; font-style: bold; margin: auto 20px; text-align: justify; text-indent: 7%;">
                    Areakerja adalah perusahaan berbasis teknologi informasi yang berpusat di Yogyakarta. Perusahaan ini
                    berfokus pada platform untuk mencari lowongan kerja di Daerah Istimewa Yogyakarta (DIY).
                </p>
                <p class="mb-3"
                    style="font-size: 13pt; font-style: bold; margin: auto 20px; text-align: justify; text-indent: 7%;">
                    DIY sebagai salah satu wilayah prestisius di Indonesia yang menyandang sebagai kota budaya dan pelajar
                    membuat arus ekonomi dan bisnis di wilayah ini cukup besar. Banyak sekali perusahaan besar, menengah,
                    dan kecil yang berdiri di wilayah DIY dan terus mengembangkan bisnisnya. Hal ini menuntut banyak
                    dibukanya lowongan pekerjaan di DIY.
                </p>
                <p class="mb-3"
                    style="font-size: 13pt; font-style: bold; margin: auto 20px; text-align:  justify; text-indent: 7%; ">
                    Banyaknya arus lowongan pekerjaan di Yogyakarta baik dari perusahaan besar, menengah, dan kecil menuntut
                    diperlukannya sebuah media yang berfokus untuk menampung informasi lowongan pekerjaan yang ada di
                    Yogyakarta.
                </p>
                <p class="mb-3"
                    style="font-size: 13pt; font-style: bold; margin: auto 20px; text-align:  justify; text-indent: 7%; ">
                    Untuk itu Areakerja hadir sebagai platform untuk membantu perusahaan mendapatkan kandidat terbaiknya,
                    serta membantu para pencari kerja untuk menemukan pekerjaan yang diinginkan di DIY.
                </p>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-areakerja-2\resources\views/user/aboutus.blade.php ENDPATH**/ ?>