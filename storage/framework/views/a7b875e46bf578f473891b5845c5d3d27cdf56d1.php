
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                Cabang List
                <a class="btn btn-success ml-2" href="/admin/cabang/create">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Tambah Cabang
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                    <thead>
                        <tr>
                            <th width="10">
                                No
                            </th>
                            <th>
                                Cabang
                            </th>
                            <th>
                                Url
                            </th>
                            <th>
                                Logo
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cabang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($cabang->cabang); ?></td>
                            <td><?php echo e($cabang->url); ?></td>
                            <td><img src="/img/logo_cabang/<?php echo e($cabang->logo); ?>" alt="..." style="width: 100px; height: 70px;"></td>
                            <td>
                                <a style="width: 60px" class="btn btn-xs btn-info" href="/admin/cabang/edit/<?php echo e($cabang->id); ?>">
                                    Edit
                                </a>
                                <a style="width: 60px" class="btn btn-xs btn-danger" href="/admin/cabang/destroy/<?php echo e($cabang->id); ?>">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/cabang/show.blade.php ENDPATH**/ ?>