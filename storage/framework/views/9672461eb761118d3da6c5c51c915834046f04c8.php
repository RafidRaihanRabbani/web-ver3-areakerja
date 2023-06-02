
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        Kandidat <?php echo e($kandidat->nama); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.job.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($kandidat->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Lengkap
                        </th>
                        <td>
                            <?php echo e($kandidat->nama); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Skill
                        </th>
                        <td>
                            <?php echo e($kandidat->mainskill->nama ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Domisili
                        </th>
                        <td>
                            <?php echo e($kandidat->domisili ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Biografi
                        </th>
                        <td>
                            <?php echo e($kandidat->biografi ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Skill
                        </th>
                        <td>
                            <ul>
                            <?php $__currentLoopData = $skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ski): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><h6 class="mt-2 my-0" style="color: #000"><?php echo e($ski->nama); ?></h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000"><?php echo e($ski->tingkat); ?>%</span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Riwayat Pendidikan
                        </th>
                        <td>
                            <ul>
                            <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><h6 class="mt-2 my-0" style="color: #000"><?php echo e($pend->nama_instansi); ?></h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000"><?php echo e($pend->gelar); ?></span>
                                <span class="font-weight-normal "
                                        style="color: #000"><?php echo e($pend->tahun); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pengalaman Kerja
                        </th>
                        <td>
                            <ul>
                            <?php $__currentLoopData = $pengalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><h6 class="mt-2 my-0" style="color: #000"><?php echo e($peng->nama_pengalaman); ?></h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000"><?php echo e($peng->posisi); ?></span>
                                <span class="font-weight-normal "
                                        style="color: #000"><?php echo e($peng->tahun); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sertifikat
                        </th>
                        <td>
                            <ul>
                            <?php $__currentLoopData = $sertifikasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sertif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><h6 class="mt-2 my-0" style="color: #000"><?php echo e($sertif->nama_sertifikasi); ?></h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000"><?php echo e($sertif->penyelenggara); ?></span>
                                <span class="font-weight-normal "
                                        style="color: #000"><?php echo e($sertif->tahun); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Organisasi
                        </th>
                        <td>
                            <ul>
                            <?php $__currentLoopData = $organisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><h6 class="mt-2 my-0" style="color: #000"><?php echo e($org->judul); ?></h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000"><?php echo e($org->jabatan); ?></span>
                                <span class="font-weight-normal "
                                        style="color: #000"><?php echo e($org->tahun); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            <?php echo e($kandidat->status ?? ''); ?>

                        </td>
                    </tr>



                    
                    
                    
                    
                    
                    
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/kandidat/show.blade.php ENDPATH**/ ?>