<footer class="footer-area" id="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="container footer-nav">
                    <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('img/img-01(2).png')); ?>" style="width:50px;" alt="" title=""></a>
                    <ul class="col row">
                        
                        <li>
                            <a href="<?php echo e(route('aboutus')); ?>">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('kontak')); ?>">Kontak Kami</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('pilihpaket')); ?>">Pasang Lowongan</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="col-lg-8 footer-text m-0" style="color: grey">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Areakerja.com
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-social">
                    <h4 class="text-grey">Temukan Kami di</h4>
                    <ul class="col row">

                        <li>
                            <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-twitter-square" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-telegram" style="font-size:36px"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="modalPushFilter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content text-center">
            <div class="modal-header2 d-flex">
                <p class="heading">Filter</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="color: rgb(255, 255, 255)" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div data-aos="zoom-in-up" class="single-slidebar ">
                    <h4>Lokasi</h4>
                    <ul class="cat-list-mobile">
                        <?php $__currentLoopData = $sidebarLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="justify-content-between d-flex" href="<?php echo e(route('locations.show', $location->slug)); ?>">
                                <p><?php echo e($location->name); ?></p>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div data-aos="zoom-in-up" class="single-slidebar">
                    <h4>Kategori</h4>
                    <ul class="cat-list-mobile">
                        <?php $__currentLoopData = $sidebarCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="justify-content-between d-flex" href="<?php echo e(route('categories.show', $category->slug)); ?>">
                                <p><?php echo e($category->name); ?></p>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <a role="button" class="btn btn-outline-close" data-dismiss="modal"><span style="margin-left: -30%">Close</span></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPushRiwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content text-center">
            <div class="modal-header2 d-flex">
                <p class="heading">Riwayat Penelusuran</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="color: rgb(255, 255, 255)" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pekerjaan</th>
                            <th>Perusahaan</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $riwayatlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $riwayatlis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($riwayatlis->job->title); ?></td>
                            <td><?php echo e($riwayatlis->job->company->name); ?></td>
                            <td width='50%'>
                                <a href="<?php echo e(route('jobs.show', $riwayatlis->job->slug)); ?>" style="color:#fff; padding-top: 1px; padding-bottom: 1px; padding-left: 5px; padding-right: 5px;" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
<footer class="page-footer special-color-dark  d-md-none d-lg-none d-xl-none">

    <!-- Footer Elements -->

    <!-- Social buttons -->
    <ul class="col row " style="width: max-content;margin-left: auto;margin-right: auto">

        <li class="mr-2">
            <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram" style="font-size:36px; color:#fe7b54"></i></a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-facebook-square" style="font-size:36px; color:#fe7b54"></i></a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-twitter-square" style="font-size:36px; color:#fe7b54"></i></a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-linkedin-square" style="font-size:36px; color:#fe7b54"></i></a>
        </li>
        <li>
            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-telegram" style="font-size:36px; color:#fe7b54"></i></a>
        </li>
    </ul>
    <!-- Social buttons -->

    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="container">
        <div class="footer-copyright text-center py-3">
            <h5>Temukan Kami</h5>
        </div>
        <div class="container">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
            <nav class="navbar navbar-light navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom no-padding" style="background-color: white">
                <ul class="navbar-nav nav-justified w-100">
                    <li class="nav-item border-right">
                        <a href="#" class="nav-link" style="color: black" data-toggle="modal" data-target="#modalPushFilter"> <span class="fa fa-filter" aria-hidden="true"></span>
                            Filter</a>
                    </li>
                    <li class="nav-item border-right">
                        <a href="#" class="nav-link" style="color: black" data-toggle="modal" data-target="#modalPushRiwayat"><span class="fa fa-refresh" aria-hidden="true"></span>
                            Riwayat</a>
                    </li>
                    <li class="nav-item border-right">
                        <a href="#" class="nav-link justify-content-between" style="color: black" data-target="#modalPush" data-toggle="modal"><span class="fa fa-star-o" aria-hidden="true"></span> Simpan</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/partials/footer.blade.php ENDPATH**/ ?>