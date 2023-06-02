

<?php $__env->startSection('meta'); ?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
<meta property="og:description" content="Area kerja platform untuk tempat pemberi Informasi detail tentang Lowongan Kerja.">
<meta property="og:image" content="<?php echo e(asset('img/img-01.png')); ?>">
<meta name="description" content="Informasi detail tentang Lowongan Kerja">
<meta name="keywords" content="<?php echo e($job->title); ?>, <?php echo e($job->company->name); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('home'); ?>
<section class="relative mb-3 mb-md-5" id="home">
    <div class="banner-area2">
        <div class="overlay overlay-bg container">
            <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                Areakerja.com > <?php echo e($job->address); ?> > Lowongan <?php echo e($job->title); ?> di <?php echo e($job->company->name); ?>

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

</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-lg-8 post-list">
    <div class="single-post2 d-flex flex-row" style="margin-bottom: 10px">
        <div class="details" style="width: 100%">
            <div class="row no-gutters" style="width: 100%">
                <div class="col-8">
                    <a href="<?php echo e(route('compan', $job->company->id)); ?>">
                        <h2 class="cmp" style="font-weight: normal"><?php echo e($job->company->name); ?></h2>
                    </a>
                    <h5 style="margin-top: 8px; font-weight: normal">Membuka Lowongan</h5>

                    <h1 class="ttl" style="margin-top: 8px"> <?php echo e($job->title); ?></h1>
                </div>
                <div class="col-4 text-right" style="width: 100px;height: 100px;">
                    <a href="<?php echo e(route('compan', $job->company->slug)); ?>">
                        <img style="width: 25px;height: 25px;margin-bottom: 45%;margin-left: 45%" src="<?php echo e(url('img/link.png')); ?>" class="position-absolute">
                        <img class="gg5" src="<?php echo e(url('img/companylogo')); ?>/<?php echo e($job->company->gambar); ?>" style="margin: auto;margin-top: 3%;margin-left: 5% ">
                    </a>
                </div>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%; margin-top: 12px" />
            <h4 class="gg" style="margin-top: 8px; font-weight: normal;"><?php echo e($job->company->deskripsi); ?></h4>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;margin-top: 16px" />
            <h3 class="head" style="margin-top: 10px">Ringkasan</h3>
            <div class=" row">
                <ul class="col-5" style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Pendidikan</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-venus-mars"></span><span style="display:inline-block; width: 15px;"></span>Gender</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-universal-access"></span><span style="display:inline-block; width: 15px;"></span>Umur</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-user-circle-o"></span><span style="display:inline-block; width: 15px;"></span>Status Kerja</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-money"></span><span style="display:inline-block; width: 15px;"></span>Besaran Gaji</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-calendar"></span><span style="display:inline-block; width: 15px;"></span>Batas Lamaran</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-map-marker"></span><span style="display:inline-block; width: 15px;"></span>Lokasi Kerja</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal;"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-6 ">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><?php echo e($job->pendidikan); ?></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><?php echo e($job->gender); ?></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><?php echo e($job->umur); ?></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><?php echo e($job->job_nature); ?></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><?php echo e($job->salary); ?></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><?php echo e($job->bataslamaran); ?></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">
                            <p style="line-height: 150%; margin-top: -1%"><?php echo e($job->lokasikerja); ?></p>
                        </h4>
                    </li>
                </ul>
            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <h3 class="head" style="margin-top: 10px">Deskripsi Pekerjaan</h3>
            <?php $__currentLoopData = $job->full_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hehe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;"><?php echo e($hehe); ?></h4>
                </li>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <h3 class="head" style="margin-top: 10px">Syarat Pekerjaan</h3>
            <?php $__currentLoopData = $job->requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hehe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;"><?php echo e($hehe); ?></h4>
                </li>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <h3 class="head" style="margin-top: 10px">Kirim Lamaran</h3>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Email</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;" style="background-color: wheat">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal;"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg6" style="margin-top: 10px; font-weight: normal;" id="sample"><?php echo e($job->email); ?></h4>
                </ul>
                <ul class="col-auto " style="overflow: unset; white-space: nowrap; ">
                    <h4 class="gg8" style="margin-top: 5px; font-weight: normal">
                        <button onclick="CopyToClipboard('sample'); myFunction3()" class="fas fa-copy ui-button-icons-only buttona">
                            <div class="row justify-content-center popuptext" id="myPopup3" style="padding-right: 0px;margin-right: 0px; color: #000000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Disalin
                            </div>
                        </button>
                    </h4>
                </ul>
            </div>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li id="telepon1">
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Nomor Telepon</h4>
                    </li>
                    <li style="display: none" id="telepon2">
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Telepon</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">

                    <li>
                        <h4 class="gg6" style="margin-top: 10px; font-weight: normal" id="sample2"><?php echo e($job->notelp); ?></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <h4 class="gg8" style="margin-top: 5px; font-weight: normal">
                        <button onclick="CopyToClipboard('sample2'); myFunction4()" class="fas fa-copy ui-button-icons-only buttonb">
                            <div class="row justify-content-center popuptext" id="myPopup4" style="padding-right: 0px;margin-right: 0px; color: #000000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Disalin
                            </div>
                        </button>
                    </h4>
                </ul>

            </div>

            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li id="telepon1">
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-globe"></span><span style="display:inline-block; width: 15px;"></span>Website</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">

                    <li>
                        <h4 class="gg6" style="margin-top: 10px; font-weight: normal" id="sample3"><?php echo e($job->website); ?></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <h4 class="gg8" style="margin-top: 5px; font-weight: normal">
                        <button onclick="CopyToClipboard('sample3'); myFunction5()" class="fas fa-copy ui-button-icons-only buttonb">
                            <div class="row justify-content-center popuptext" id="myPopup5" style="padding-right: 0px;margin-right: 0px; color: #000000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Disalin
                            </div>
                        </button>
                    </h4>
                </ul>

            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <div class="row" style="margin-top: 15px">
                <div class="col-2" style="margin-right: 10%;">
                    <div class="btn popup2 form-pasang3" id="btn1" onclick="myFunction2()">
                        <h4 class="gg" style="font-weight: normal"><span class="fa fa-paper-plane-o"></span><span style="display:inline-block; width: 10px;"></span>Lamar</h4>
                        <div class="row justify-content-center popuptext" id="myPopup2" style="padding-right: 0px;margin-right: 0px">
                            <ul class="row justify-content-center">
                                <li style="margin-bottom: 5%; margin-top: 5%">
                                    <a role="button" class="btn form-pasang4" href="<?php echo e(route('login')); ?>">
                                        <h6 style="font-weight: normal"><span class="fa fa-folder-open-o"></span><span style="display:inline-block; width: 5px;"></span>Formulir</h6>
                                    </a>
                                </li>
                                <li style="padding-left: 10px;margin-bottom: 5%; margin-top: 5%">
                                    <a role="button" class="btn form-pasang4" href="https://wa.me/<?php echo e($job->notelp); ?>?text=Halo <?php echo e($job->company->name); ?>, Saya *..NAMA..* mendapatkan informasi lowongan kerja dari Areakerja.com. Saya berminat untuk melamar kerja sebagai <?php echo e($job->title); ?>">
                                        <h6 style="font-weight: normal"><span class="fa fa-whatsapp"></span><span style="display:inline-block; width: 5px;"></span>Whatsapp</h6>
                                    </a>
                                </li>
                                <li style="padding-left: 10px; margin-bottom: 5%" id="liemail">
                                    <a role="button" class="btn form-pasang4" href="mailto:<?php echo e($job->email); ?>?subject=Lamaran Pekerjaan di <?php echo e($job->company->name); ?>">
                                        <h6 style="font-weight: normal"><span class="fa fa-envelope-o"></span><span style="display:inline-block; width: 5px;"></span><?php echo e($job->company->name); ?></h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2 gg2" style="margin-right: 12%">
                    

                    <a type="button" class="btn form-pasang3" href="<?php echo e(route('cache', $job->id)); ?>" id="btnfix1" data-toggle="0">
                        <h4 class="gg" style="font-weight: normal" id="btnfix2"><span class="fa fa-star-o"></span><span style="display:inline-block; width: 10px;"></span> Simpan </h4>
                    </a>
                </div>


                <div class="col-2">
                    <div class="btn popup form-pasang3" onclick="myFunction()" id="btn3">
                        <h4 class="gg" style="font-weight: normal"><span class="fa fa-share-alt"></span><span style="display:inline-block; width: 10px;"></span>Bagikan</h4>
                        <div class="row justify-content-center popuptext" id="myPopup" style="padding-right: 0px;margin-right: 0px">
                            <ul class="col row justify-content-center">

                                <li>
                                    <a href="https://www.facebook.com/sharer.php?u=<?php echo e(route('jobs.show', $job->id)); ?>"><i class="fa fa-facebook-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://twitter.com/intent/tweet?text=Lowongan Kerja <?php echo e($job->title); ?> di <?php echo e($job->company->name); ?> - Areakerja.com - <?php echo e(route('jobs.show', $job->id)); ?>"><i class="fa fa-twitter-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://mail.google.com/mail/?view=cm&su=Lowongan Kerja <?php echo e($job->title); ?> di <?php echo e($job->company->name); ?> - Areakerja.com - <?php echo e(route('jobs.show', $job->id)); ?>"><i class="fas fa-envelope-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://wa.me/?text=Lowongan Kerja <?php echo e($job->title); ?> di <?php echo e($job->company->name); ?> - Areakerja.com - <?php echo e(route('jobs.show', $job->id)); ?>"><i class="fab fa-whatsapp-square" style="font-size:36px; color: black""></i></a>
                                </li>

                            </ul>
                        </div>

                      </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/jobs/show.blade.php ENDPATH**/ ?>