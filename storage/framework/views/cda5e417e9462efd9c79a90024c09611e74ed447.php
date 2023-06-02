
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            Artikel <?php echo e(trans('global.list')); ?>

            <a class="btn btn-success ml-2" href="<?php echo e(route("admin.article.create")); ?>">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                <?php echo e(trans('global.add')); ?> Artikel
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.category.fields.id')); ?>

                        </th>
                        <th>
                            Judul
                        </th>
                        <th>
                            Ringkasan
                        </th>
                        <th>
                            Thumbnail
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($posts->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($posts->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($posts->judul ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($posts->ringkasan ?? ''); ?>

                            </td>
                            <td>
                                <?php if($posts->gambar): ?>
                                    <img src="<?php echo e(url('img/artikel')); ?>/<?php echo e($posts->gambar); ?>" style="width: 100px; height: 70px;">
                                <?php endif; ?>
                            </td>

                            <td align="center">

                                <a style="width: 60px" class="btn btn-xs btn-primary" href="<?php echo e(route('admin.article.show', $posts->id)); ?>">
                                    <?php echo e(trans('global.view')); ?>

                                </a>

                                <a style="width: 60px" class="btn btn-xs btn-primary" href="<?php echo e(route('artikel.show', $posts->slug)); ?>" target="_blank">
                                    <?php echo e(trans('global.show')); ?>

                                </a>

                                <a style="width: 60px" class="btn btn-xs btn-info" href="<?php echo e(route('admin.article.edit', $posts->id)); ?>">
                                    <?php echo e(trans('global.edit')); ?>

                                </a>

                                <form action="<?php echo e(route('admin.article.destroy', $posts->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
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
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.article.massDestroy')); ?>",
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
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  $('.datatable-Category:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/article/index.blade.php ENDPATH**/ ?>