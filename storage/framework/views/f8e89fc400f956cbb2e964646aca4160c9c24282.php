

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
        <div class="banner-tips ">
            <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
                <div class="banner-content col-lg-12">
                    <div class="overlay overlay-bg container" style= "margin-right: 400px; margin-top: 100px">
                        <h1 style="color: #ffffff; margin-bottom:5px; margin-right: 100px ">
                            Tips Kerja
                        </h1>
                        <h6 style="color: #ffffff; ">
                            Pelajari Tips-Tips Kerja Yang Telah Kami Buat
                        </h6>
                        <h6 style="color: #ffffff; margin-right: 240px">
                            Untuk Anda
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-deck mb-4">
        <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4 my-2">
                <a href="<?php echo e(route('artikel.show', [Str::slug($art->judul)])); ?>" style="color: black">
                    <div class="card post-list2 ml-auto mr-auto" style="height: 100%;">
                        <?php if($art->gambar): ?>
                            <img class="card-img-top" src="<?php echo e(url('img/artikel')); ?>/<?php echo e($art->gambar); ?>"
                                alt="Card image cap"
                                style="width: inherit;height: 30vh;object-fit: cover;border-radius:15px">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title "><?php echo e($art->judul); ?></h5>
                            <p class="card-text"><?php echo e($art->ringkasan); ?></p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pasang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/artikel/index.blade.php ENDPATH**/ ?>