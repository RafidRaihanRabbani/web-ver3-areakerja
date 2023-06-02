<nav class="navbar navbar-expand-lg navbar-light" id="header">
    <div class="container">
        <div id="logo" class="navbar-brand animate__animated animate__flipInX">
            <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('img/img-01.png')); ?>" style="width:80px;" alt="" title="" /></a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigaation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item mb-2 mb-md-0 mr-2">
                    <a role="button" class="nav-link form-pasang5" href="<?php echo e(route('artikel')); ?>"
                        style="color: #fe7b54;font-size: 14px; background-color: #fe7c5400; font-weight:600">
                        <span class="fa fa-newspaper-o mr-1"></span> Tips Kerja
                    </a>
                </li>
                <li class="nav-item mb-2 mb-md-0 mr-2">
                  <div class="dropdown">
                    <a role="button" class="nav-link form-pasang5" href="" data-bs-toggle="dropdown" aria-expanded="false"
                        style="color: #fe7b54;font-size: 14px; background-color: #fe7c5400; font-weight:600">
                        <span class="fa-fw fas fa-map-marker-alt"></span> Kota Lainnya
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start mt-1">
                      <?php $__currentLoopData = $province; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li>
                        <a href="/province/<?php echo e($province->id); ?>" class="dropdown-item"><?php echo e($province->province); ?></a>
                      </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <li><div class="" style="padding-right: 110px; padding-left: 110px"></div></li>
                    </ul>
                  </div>
                    

                </li>
                
                <li class="nav-item">
                    <a role="button" class="nav-link form-pasang px-2 " href="<?php echo e(route('pilihpaket')); ?>"
                        style="color: #fee5ba;width:max-content;font-weight:600">

                        <span class="fas fa-briefcase mr-2"></span> Pasang Lowongan
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php /**PATH D:\XAMPP\htdocs\web-areakerja-2\resources\views/partials/header.blade.php ENDPATH**/ ?>