

<?php $__env->startSection('meta'); ?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
<meta property="og:description" content="Area kerja platform untuk menyediakan lowongan kerja dari berbagai perusahaan.">
<meta property="og:image" content="<?php echo e(asset('img/img-01(2).png')); ?>">
<meta name="description" content="Area Kerja menyediakan lowongan kerja dari berbagai perusahaan">
<meta name="keywords" content="<?php echo e($job[0]->name); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('home'); ?>
<section class="relative mb-3 mb-md-5" id="home">
    <div class="banner-area2">
        <div class="overlay overlay-bg container">
            <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                Areakerja.com > <?php echo e($job[0]->name); ?>

            </h4>
        </div>
    </div>
    <div class="container text-center">
        <form action="<?php echo e(route('search')); ?>">
            <div class="col-10 col-sm-10 col-md-8 form-wrap-main">
                <div class="col-12 search">
                    <div class="row">
                        <div class="col-12 col-sm-4 ">
                            <input type="text" class="form-control" style="margin: 10px 0;" name="search" placeholder="Cari Disini">
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-6 col-sm-4">
                            <select class="default-select3" name="location">
                                <option value="0">All Areas</option>
                                <?php $__currentLoopData = $searchLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$searchLocations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"><?php echo e($searchLocations); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!-- Add clearfix for only the required viewport -->
                        <div class="col-6 col-sm-4">
                            <div>
                                <select class="default-select3" name="location">
                                    <option value="0">All Categories</option>
                                    <?php $__currentLoopData = $searchCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$searchCategories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"><?php echo e($searchCategories); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="col-lg-8 post-list gg12">
    <div class="row no-gutters" style="width: 100%">
        <div class="col-8 " style="margin-bottom: 20px">
            <h3 class="sng-ttl2" style="margin-bottom: 10px; font-weight: normal">Riwayat Lowongan</h3>
            <h2 class="cmp"><?php echo e($job[0]->name); ?></h2>

        </div>
        <div class="col-4 text-right " style="width: 100%;">
            <img class="gg6" src="<?php echo e(url('img/companylogo')); ?>/<?php echo e($job[0]->gambar); ?>" style="margin: auto; ">
        </div>
    </div>
    <?php $__currentLoopData = $job2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('riwayat', $job1->slug)); ?>">
        <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 100%">

            <div class="details " style="width: 100%; margin-top: 14px; overflow: unset; white-space: nowrap;">
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <h3 class="sng-ttl2"><?php echo e($job1->title); ?></h3>
                    </div>
                </div>
                <hr class="d-flex flex-row gg" style="width: 100%; margin-left: -0.5%" />
                <div class="row ttl3">
                    <div class="col-auto ">
                        <h5 class="sng-dtl">
                            <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                            <?php echo e($job1->pendidikan); ?>

                        </h5>
                    </div>
                    <div class="col-auto ">
                        <h5 class="sng-dtl">
                            <span class="fa fa-hourglass-half" aria-hidden="true"></span>
                            <?php echo e($job1->job_nature); ?>

                        </h5>
                    </div>
                    <div class="col-auto">
                        <h5 class="sng-dtl">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                            <?php echo e($job1->address); ?>

                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom'); ?>

<nav class="navbar navbar-light navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom no-padding" style="background-color: white">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item border-right">
            <a href="#" class="nav-link" style="color: black"> <span class="fa fa-filter" aria-hidden="true"></span> Filter</a>
        </li>
        <li class="nav-item border-right">
            <a href="#" class="nav-link" style="color: black" data-toggle="modal" data-target="#modalPushRiwayat"><span class="fa fa-refresh" aria-hidden="true"></span> Riwayat</a>
        </li>
        <li class="nav-item border-right">
            <a href="#" class="nav-link justify-content-between" style="color: black" data-target="#modalPush" data-toggle="modal"><span class="fa fa-star-o" aria-hidden="true"></span> Simpan</a>
        </li>
    </ul>
</nav>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/company/index.blade.php ENDPATH**/ ?>