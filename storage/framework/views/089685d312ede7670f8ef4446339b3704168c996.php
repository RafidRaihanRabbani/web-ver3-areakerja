
<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                List Lowongan
                <!-- <?php echo e(trans('cruds.job.title_singular')); ?> <?php echo e(trans('global.list')); ?> -->
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
                                Nama Perusahaan
                            </th>
                            <th>
                                Deskripsi
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Logo Perusahaan
                            </th>
                            <th>
                                Nama Pekerjaan
                            </th>
                            <th>
                                Alamat Kantor
                            </th>
                            <th>
                                Deskripsi Pekerjaan
                            </th>
                            <th>
                                Syarat Pekerjaan
                            </th>
                            <th>
                                Gender
                            </th>
                            <th>
                                Minimal Umur
                            </th>
                            <th>
                                Minimal Pendidikan
                            </th>
                            <th>
                                Status Kerja
                            </th>
                            <th>
                                Batas Lamaran
                            </th>
                            <th>
                                Gaji
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                No Telepon
                            </th>
                            <th>
                                Website
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lowongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $low): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($low->id); ?>">
                                <td>

                                </td>
                                <td>
                                    <?php echo e($low->id); ?>

                                </td>
                                <td>
                                    <?php echo e($low->namaperusahaan); ?>

                                </td>
                                <td>
                                    <?php echo e($low->deskripsiperusahaan); ?>

                                </td>
                                <td>
                                    <?php echo e($low->alamatperusahaan); ?>

                                </td>
                                <td style="width: 150px; vertical-align: middle; text-align: center;">
                                    <?php if($low->gambar): ?>
                                        <img src="<?php echo e(url('storage/tmpcompanylogo')); ?>/<?php echo e($low->gambar); ?>"
                                            style="width: 100px; height: 70px;">
                                    <?php endif; ?>
                                    <a download="<?php echo e($low->namaperusahan); ?>"
                                        href="<?php echo e(Storage::url('tmpcompanylogo')); ?>/<?php echo e($low->gambar); ?>"
                                        title="<?php echo e($low->namaperusahaan); ?>">
                                        <button type="button" class="btn btn-primary mt-2">Download</button>
                                    </a>
                                </td>
                                <td>
                                    <?php echo e($low->posisi); ?>

                                </td>
                                <td>
                                    <?php echo e($low->alamat_kantor); ?>

                                </td>
                                <td>
                                    <?php echo e($low->deskripsi_pekerjaan); ?>

                                </td>
                                <td>
                                    <?php echo e($low->syarat_pekerjaan); ?>

                                </td>
                                <td>
                                    <?php echo e($low->gender); ?>

                                </td>
                                <td>
                                    <?php echo e($low->min_umur); ?>

                                </td>
                                <td>
                                    <?php echo e($low->min_pendidikan); ?>

                                </td>
                                <td>
                                    <?php echo e($low->job_nature); ?>

                                </td>
                                <td>
                                    <?php echo e($low->bataslamaran); ?>

                                </td>
                                <td>
                                    <?php echo e($low->gaji); ?>

                                </td>
                                <td>
                                    <?php echo e($low->email); ?>

                                </td>
                                <td>
                                    <?php echo e($low->notelp); ?>

                                </td>
                                <td>
                                    <?php echo e($low->web); ?>

                                </td>
                                <td>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.lowongan.show', $low->id)); ?>"
                                        style="width: 60px">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>

                                    <form action="<?php echo e(route('admin.lowongan.destroy', $low->id)); ?>" method="POST"
                                        onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-xs btn-danger"
                                            value="<?php echo e(trans('global.delete')); ?>" style="width: 60px">
                                    </form>

                                    <a class="btn btn-xs btn-success" href="<?php echo e(route('admin.lowongan.edit', $low->id)); ?>"
                                        style="width: auto">
                                        Detail Pembayaran
                                    </a>

                                    <?php if($low->pembayaran->status == 'LUNAS'): ?>
                                        <a class="btn btn-xs btn-success"
                                            href="<?php echo e(route('admin.addjoblowongan', $low->id)); ?>" style="width: auto">
                                            Terima Lowongan
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
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_delete')): ?>
                let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
                let deleteButton = {
                text: deleteButtonTrans,
                url: "<?php echo e(route('admin.lowongan.massDestroy')); ?>",
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
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-Job:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/lowongan/index.blade.php ENDPATH**/ ?>