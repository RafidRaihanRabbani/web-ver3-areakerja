
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                Contact List
                <a class="btn btn-success ml-2" href="/admin/contact/create">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Tambah Contact
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
                                Name
                            </th>
                            <th>
                                Contact
                            </th>
                            <th style="width: 200px">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($contact->name); ?></td>
                            <td><?php echo e($contact->contact); ?></td>
                            <td>
                                <a style="width: 60px" class="btn btn-xs btn-info" href="/admin/contact/edit/<?php echo e($contact->id); ?>">
                                    Edit
                                </a>
                                <a style="width: 60px" class="btn btn-xs btn-danger" href="/admin/contact/destroy/<?php echo e($contact->id); ?>">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/contact/show.blade.php ENDPATH**/ ?>