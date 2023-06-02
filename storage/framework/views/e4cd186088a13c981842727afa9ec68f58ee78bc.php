
<?php $__env->startSection('content'); ?>
<div class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">

              <h3><?php echo e($jobs); ?></h3>

              <p>Pekerjaan</p>
            </div>
            <div class="icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <a href="<?php echo e(route("admin.jobs.index")); ?>" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo e($categories); ?></h3>

              <p>Kategori</p>
            </div>
            <div class="icon">
              <i class="fas fa-list-alt"></i>
            </div>
            <a href="<?php echo e(route("admin.categories.index")); ?>" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo e($companies); ?></h3>

              <p>Perusahaan</p>
            </div>
            <div class="icon">
              <i class="fas fa-building"></i>
            </div>
            <a href="<?php echo e(route("admin.companies.index")); ?>" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo e($locations); ?></h3>

              <p>Lokasi</p>
            </div>
            <div class="icon">
              <i class="fas fa-map-marker"></i>
            </div>
            <a href="<?php echo e(route("admin.locations.index")); ?>" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/home.blade.php ENDPATH**/ ?>