
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            <?php echo e(trans('cruds.job.title_singular')); ?> <?php echo e(trans('global.list')); ?>

            <a class="btn btn-success ml-2" href="<?php echo e(route("admin.jobs.create")); ?>">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.job.title_singular')); ?>

            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Job">
                <thead class="bg-warning">
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.title')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.company')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.full_description')); ?>

                        </th>
                        <th>
                            Requirements
                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.location')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.address')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.categories')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.salary')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.job.fields.top_rated')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($job->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($job->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($job->title ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($job->company->name ?? ''); ?>

                            </td>
                            <td>
                                <?php $__currentLoopData = $job->full_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hehe2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($hehe2); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php $__currentLoopData = $job->requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hehe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($hehe); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php echo e($job->location->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($job->address ?? ''); ?>

                            </td>
                            <td>
                                <?php $__currentLoopData = $job->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-info"><?php echo e($item->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php echo e($job->salary ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($job->top_rated ? trans('global.yes') : trans('global.no')); ?>

                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.jobs.show', $job->id)); ?>" style="width: 60px">
                                    <?php echo e(trans('global.view')); ?>

                                </a>

                                <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.jobs.edit', $job->id)); ?>" style="width: 60px">
                                    <?php echo e(trans('global.edit')); ?>

                                </a>

                                <form action="<?php echo e(route('admin.jobs.destroy', $job->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>" style="width: 60px">
                                </form>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.jobs.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')
        return
      }
      if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
<?php endif; ?>
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Job:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/jobs/index.blade.php ENDPATH**/ ?>