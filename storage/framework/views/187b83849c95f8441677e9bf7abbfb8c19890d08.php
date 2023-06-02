
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            Price List
            <a class="btn btn-success ml-2" href="<?php echo e(route("admin.price.create")); ?>">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                Add Price
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
                            ID
                        </th>
                        <th>
                            Paket
                        </th>
                        <th>
                            Short Deskripsi
                        </th>
                        <th>
                            Full Deskripsi
                        </th>
                        <th>
                            List
                        </th>
                        <th width="100">
                            Harga
                        </th>
                        <th>
                            Warna
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($price->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($price->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($price->nama ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($price->deskripsi_singkat ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($price->deskripsi_full ?? ''); ?>

                            </td>
                            <td>
                                <?php $__currentLoopData = $price->list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hoho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($hoho); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                               Rp. <?php echo e(number_format( $price->harga ?? '' , 0, '.', '.')); ?>

                            </td>
                            <td>
                                <?php echo e($price->warna ?? ''); ?>

                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.price.show', $price->id)); ?>" style="width: 60px">
                                    <?php echo e(trans('global.view')); ?>

                                </a>

                                <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.price.edit', $price->id)); ?>" style="width: 60px">
                                    <?php echo e(trans('global.edit')); ?>

                                </a>

                                <form action="<?php echo e(route('admin.price.destroy', $price->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
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
    url: "<?php echo e(route('admin.price.massDestroy')); ?>",
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/price/index.blade.php ENDPATH**/ ?>