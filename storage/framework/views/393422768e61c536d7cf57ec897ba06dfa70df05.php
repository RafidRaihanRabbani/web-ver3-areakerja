
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                City List
                <a class="btn btn-success ml-2" href="/admin/cities/create">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Tambah City
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                    <thead>
                        <tr>
                            <th width="10">
                                Id
                            </th>
                            <th>
                                City
                            </th>
                            <th>
                                Province
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $data->location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loc->id); ?></td>
                                <td><?php echo e($loc->name); ?></td>
                                <td><?php echo e($data->province); ?></td>
                                <td>
                                    <a style="width: 60px" class="btn btn-xs btn-info" href="/admin/cities/edit/<?php echo e($loc->id); ?>">
                                    Edit
                                    </a>
                                    <a style="width: 60px" class="btn btn-xs btn-danger" href="/admin/cities/destroy/<?php echo e($loc->id); ?>">
                                    Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/city/show.blade.php ENDPATH**/ ?>