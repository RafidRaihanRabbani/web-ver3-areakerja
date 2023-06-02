
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                Province List
                <a class="btn btn-success ml-2" href="/admin/provinces/create">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Tambah Province
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
                                Province
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data->id); ?></td>
                            <td><?php echo e($data->province); ?></td>
                            <td>
                                <a style="width: 60px" class="btn btn-xs btn-info" href="/admin/provinces/edit/<?php echo e($data->id); ?>">
                                    Edit
                                </a>
                                <a style="width: 60px" class="btn btn-xs btn-danger" href="/admin/provinces/destroy/<?php echo e($data->id); ?>">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/provinces/show.blade.php ENDPATH**/ ?>