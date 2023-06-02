
<?php $__env->startSection('meta'); ?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="<?php echo e(asset('img/img-01.png')); ?>">
<meta name="description" content="Untuk bertanya hal terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.">
<meta name="keywords" content="kontak">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
    <section class="relative" id="home">
        <div class="banner-area2">
            <div class="overlay overlay-bg container">
                <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                    Areakerja.com > Kontak Kami
                </h4>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('aboutus'); ?>
    <section class="relative" id="home">
        <div class="container text-center">
            <div class="col-12 col-sm-8 mb-5 ml-auto mr-auto form-wrap-main">
                <form method="POST" enctype="multipart/form-data" action="<?php echo e(url('kontakform')); ?>"
                    class="serach-form-area flex-wrap">
                    <?php echo csrf_field(); ?>
                    <div class="container ">
                        <h1 class="mb-4 mr-auto ml-auto" style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">Kontak
                            Kami</h1>
                        <p class="mb-3" style="font-size: 12pt; font-style: bold;text-align: left; ">
                            Apabila ada pertanyaan ataupun saran untuk AreaKerja, silahkan mengisi form di bawah ini:
                        </p>
                        <p class="mb-3" style="font-size: 12pt; font-style: bold;text-align: left">
                            Catatan: Kami tidak menerima pertanyaan terkait ketersediaan lowongan dan sebagainya. Untuk
                            bertanya hal terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.
                        </p>
                        <hr style="margin:auto;">
                        <?php if(\Session::has('success')): ?>
                            <p class="alert alert-success">
                                <?php echo \Session::get('success'); ?>

                            </p>
                        <?php endif; ?>

                        <?php if(\Session::has('error')): ?>
                            <p class="alert alert-danger">
                                <?php echo \Session::get('error'); ?>

                            </p>
                        <?php endif; ?>

                        <div class="row mb-3 mt-3">
                            <div class="col-12 col-sm-6 text-left">
                                <h4 class="mb-2">Nama</h4>
                                <div>
                                    <input id="nama" name="nama" required="" type="text" class="form-control2 " value=""
                                        data-type="text" aria-required="true">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 mt-3 mt-sm-0 text-left">
                                <h4 class="mb-2">Email</h4>
                                <div>
                                    <input id="email" name="email" required="" type="text" class="form-control2 " value=""
                                        data-type="text" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col-7 col-sm-6 text-left">
                                <h4 class="mb-2">No Telepon / WA</h4>
                                <div>
                                    <input id="nomor" name="nomor" required="" type="text" class="form-control2 " value=""
                                        data-type="text" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <hr style="margin:auto;" />
                        <div class="row mb-3 mt-3">
                            <div class="col-12 text-left">
                                <h4 class="mb-2">Saran</h4>
                                <div>
                                    <textarea id="saran" name="saran" required="" type="text" class="form-control2 "
                                        value="" data-type="text" aria-required="true"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-area text-left mb-3 mt-3">
                            <span></span> Kirim
                        </button>

                    </div>
                </form>

            </div>
        </div>
        
        
        
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-areakerja-2\resources\views/user/kontak.blade.php ENDPATH**/ ?>