

<?php $__env->startSection('meta'); ?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
<meta property="og:description" content="Area kerja platform untuk tempat mencari kerja.">
<meta property="og:image" content="<?php echo e(asset('img/img-01.png')); ?>">
<meta name="description" content="Area kerja tempat mencari kerja">
<meta name="keywords" content="'lowongan kerja','Rekomendasi Lowongan Kerja', 'Loker Jogja'">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jobss'); ?>
<section class="relative mb-5" id="home">
    <div class="banner-area">
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: -600px">
            <div class="banner-content col-lg-12">
                <h1 style="color: #ffffff; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                    Tempatnya
                </h1>
                <h2 style="color: #ffffff; margin-bottom:5px; margin-right: 125px; text-shadow: 2px 2px 3px #353535b0;">
                    cari kerja
                </h2>
                <h6 style="color: #ffffff; text-shadow: 1px 1px 2px #353535b0;">
                    Temukan loker terbaru se-Indonesia
                </h6>
                <h6 style="color: #ffffff; margin-right: 145px; text-shadow: 1px 1px 2px #353535b0;">
                    dengan mudah!
                </h6>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <form action="<?php echo e(route('search')); ?>">
            <div class="col-10 col-sm-10 form-wrap-main">
                <div class="col-12 search">
                    <div class="row">
                        <div class="col-12 col-sm-3 ">
                            <input type="text" class="form-control" style="margin: 10px 0;" name="search" placeholder="Perusahaan">
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-6 col-sm-3">
                            <select class="default-select3" name="location">
                                <option value="0">Area</option>
                                <?php $__currentLoopData = $searchLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$searchLocations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"><?php echo e($searchLocations); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!-- Add clearfix for only the required viewport -->
                        <div class="col-6 col-sm-3">
                            <div>
                                <select class="default-select3" name="location">
                                    <option value="0">Posisi</option>
                                    <?php $__currentLoopData = $searchCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$searchCategories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"><?php echo e($searchCategories); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-6 col-sm-3">
                            <div>
                                <select class="default-select3" name="type">
                                    <option value="0">Jenis</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 text-center ">
                            <div class="col-12 col-sm-3 form-cols" style="margin:auto; padding: 0;">
                                <button type="submit" class="btn btn-area " style="margin: 10px 0; width: 100%;">
                                    <span class="lnr lnr-magnifier"></span> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="col-lg-8 post-list" id="main-content">
    <h3 class="sng-ttl9 mb-4">Rekomendasi Lowongan</h3>
    <?php $__currentLoopData = $sidbarJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('riwayat', $job->slug)); ?>">
        <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 100%">
            <div class="row" style="margin: auto;margin-right:20px">
                <?php if($job->company->gambar): ?>
                <img class="thumb2" src="<?php echo e(url('img/companylogo')); ?>/<?php echo e($job->company->gambar); ?>">
                <?php endif; ?>
            </div>

            <div class="details " style="width: 100%; margin-top: 14px; overflow: unset; white-space: nowrap;">
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <h3 class="sng-ttl" style="color: #7e7e7e">Dibutuhkan</h3>
                        <h3 class="sng-ttl2"><?php echo e($job->title); ?></h3>
                        <div class="row ttl3" style=" overflow: unset; white-space: nowrap;">
                            <div class="col-auto">
                                <h5 class="sng-dtl">
                                    <span class="fa fa-building-o" aria-hidden="true"></span>
                                    <?php echo e($job->company->name); ?>

                                </h5>
                            </div>
                            <div class="col-auto">
                                <h5 class="sng-dtl">
                                    <span class="fa fa-money" aria-hidden="true"></span>
                                    <?php echo e($job->salary); ?>

                                </h5>
                            </div>
                        </div>
                    </div>

                </div>

                <hr class="d-flex flex-row gg" style="width: 100%; margin-left: -0.5%" />
                <div class="row ttl3">
                    <div class="col-auto ">
                        <h5 class="sng-dtl">
                            <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                            <?php echo e($job->pendidikan); ?>

                        </h5>
                    </div>
                    <div class="col-auto ">
                        <h5 class="sng-dtl">
                            <span class="fa fa-hourglass-half" aria-hidden="true"></span>
                            <?php echo e($job->job_nature); ?>

                        </h5>
                    </div>
                    <div class="col-auto">
                        <h5 class="sng-dtl">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                            <?php echo e($job->address); ?>

                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/jobs/rekomendasi.blade.php ENDPATH**/ ?>