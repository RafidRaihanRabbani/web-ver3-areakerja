
<?php $__env->startSection('meta'); ?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
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

        <div class="row">
            <div class="col">
                <div class="aboutus100-pic">
                    <img src="<?php echo e(asset('img/image.png')); ?>" alt="IMG" height="596px" width="544px">
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <div class="mt-10 ml-auto mr-5">
                        <h1 class="mb-4 mt-5 ml-auto mr-auto"
                        style ="font-size: 20pt">Tentang Kami</h1>
                        <p class="mt-9 md-4 ml-auto mr-auto"
                            style="font-size: 15pt; font-style: bold; margin: auto 20px; text-align: left; text-indent: 10%;">
                            Areakerja adalah perusahaan berbasis teknologi informasi yang berpusat di Yogyakarta. Perusahaan ini
                            berfokus pada platform untuk mencari lowongan kerja di Daerah Istimewa Yogyakarta (DIY).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="col-10 col-sm-9 mb-5 ml-auto mr-auto">
                <h2 class="mb-2 mt-2 text-align: center">Yogyakarta</h2>
                <p class="mb-4 ml-auto mr-auto"
                    style="font-size: 15pt; font-style: bold; margin: auto 10px; text-center; text-indent: 10%;">
                    DIY sebagai salah satu wilayah prestisius di Indonesia yang menyandang sebagai kota budaya dan pelajar
                    membuat arus ekonomi dan bisnis di wilayah ini cukup besar. Banyak sekali perusahaan besar, menengah,
                    dan kecil yang berdiri di wilayah DIY dan terus mengembangkan bisnisnya. Hal ini menuntut banyak
                    dibukanya lowongan pekerjaan di DIY.
                </p>
            </div>
        </div>

            <div class= "row">
                <div class="col s4"><img src="<?php echo e(asset('img/Illustration.png')); ?>" >
                    <h3 class="mb-3 ml-1">Arus Lowongan</h3>
                    <p class="md-2 mb-3 mr-auto "
                    style="font-size: 15pt; font-style: bold; text-align:  justify;">
                    Banyaknya arus lowongan pekerjaan di Yogyakarta baik dari perusahaan besar, menengah, dan kecil menuntut
                    diperlukannya sebuah media yang berfokus untuk menampung informasi lowongan pekerjaan yang ada di
                    Yogyakarta.
                </div>
                <div class="col s4"><img src="<?php echo e(asset('img/018.png')); ?>" >
                    <h4 class="md-7 mb-1 ml-auto mr-auto"
                    style= "font-size: 20pt">Area Kerja</h4>
                    <p class="md-7 mb-1 ml-auto mr-auto"
                        style="font-size: 15pt; font-style: bold; text-align: justify; ">
                        Untuk itu Areakerja hadir sebagai platform untuk membantu perusahaan mendapatkan kandidat terbaiknya,
                        serta membantu para pencari kerja untuk menemukan pekerjaan yang diinginkan di DIY.
                    </p></div>
                </div>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/user/aboutus.blade.php ENDPATH**/ ?>