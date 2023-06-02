<div class="col-lg-4 sidebar gg" style="margin-top: 0%">


    <div data-aos="zoom-in-up" style="height: 5%">
        <ul class="cat-list-center" style="margin-bottom: 15%">
            <li>
                <a class="justify-content-between" data-toggle="modal" data-target="#modalPushRiwayat" href="#">
                    <p style="font-weight: bold">Riwayat</p>
                </a>
            </li>
            <li>
                <a role="button" data-toggle="modal" data-target="#modalPush" class="justify-content-between" href="#">
                    <p style="font-weight: bold">Tersimpan</p>
                </a>
            </li>
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar" style="margin-top: -15%">
        <h4>Jobs by Location</h4>
        <ul class="cat-list">
            <?php $__currentLoopData = $sidebarLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a class="justify-content-between d-flex" href="<?php echo e(route('locations.show', $location->slug)); ?>">
                    <p><?php echo e($location->name); ?></p><span><?php echo e($location->jobs_count); ?></span>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar" id="top-rate-side" style="display: none">
        <h4>Top rated job posts</h4>
        <ul class="cat-list">
            <?php $__currentLoopData = $sidebarJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a class="justify-content-between single-rated d-table-cell" href="<?php echo e(route('jobs.show', $job->id)); ?>">
                    <br />
                    <h4><?php echo e($job->title); ?></h4>
                    <?php if($job->company): ?>
                    <?php echo e($job->company->name); ?>

                    <?php endif; ?>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar">
        <h4>Jobs by Category</h4>
        <ul class="cat-list">
            <?php $__currentLoopData = $sidebarCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a class="justify-content-between d-flex" href="<?php echo e(route('categories.show', $category->slug)); ?>">
                    <p><?php echo e($category->name); ?></p><span><?php echo e($category->jobs_count); ?></span>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH D:\XAMPP\htdocs\web-areakerja-2\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>