
<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 10px;" class="row">

</div>
<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            Mitra <?php echo e(trans('global.list')); ?>

        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Company">
                <thead>
                    <tr>
                        <th width="10">
                        </th>
                        <th>
                            <?php echo e(trans('cruds.company.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.company.fields.name')); ?>

                        </th>
                        <th width="50%">
                            Deskripsi
                        </th>
                        <th width="20%">
                            Alamat
                        </th>
                        <th width="20%">
                            Nomor Telepon
                        </th>
                        <th>
                            <?php echo e(trans('cruds.company.fields.logo')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $mitras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $mitra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($mitra->id); ?>">
                            <td style="vertical-align: middle; text-align: center;">

                            </td>
                            <td style="width: 50px; vertical-align: middle; text-align: center;">
                                <?php echo e($mitra->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($mitra->nama ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($mitra->deskripsi ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($mitra->alamat ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($mitra->no ?? ''); ?>

                            </td>
                            <td style="width: 150px; vertical-align: middle; text-align: center;">
                                <?php if($mitra->logo): ?>
                                    <img src="<?php echo e(url('img/mitralogo')); ?>/<?php echo e($mitra->logo); ?>" style="width: 100px; height: 70px;">
                                <?php endif; ?>
                            </td>
                            <td align="center">
                                <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.mitra.show', $mitra->id)); ?>">
                                    <?php echo e(trans('global.view')); ?>

                                </a>

                                <form action="<?php echo e(route('admin.mitra.destroy', $mitra->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                </form>

                                <?php if(App\Models\User::where('email', $mitra->email)->first() == null): ?>
                                    <a class="btn btn-xs btn-success" href="<?php echo e(route('admin.addmitra', $mitra->id)); ?>" style="width: auto">
                                        Terima Mitra
                                    </a>
                                <?php endif; ?>

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
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('company_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.mitra.massDestroy')); ?>",
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
  $('.datatable-Company:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/mitra/index.blade.php ENDPATH**/ ?>