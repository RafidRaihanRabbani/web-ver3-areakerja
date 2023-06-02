
<?php $__env->startSection('meta'); ?>
    <meta name="description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda"/>
    <meta name="keywords" content="Pasang Lowongan di Areakerja.com"/>
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo e($title); ?> - Area Kerja">
    <meta property="og:description"
        content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda">
    <meta property="og:image" content="<?php echo e(asset('img/img-01.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/68eba8d306.css" crossorigin="anonymous">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('home'); ?>
    <section class="relative">  
        <form class= "profile">
            <div class="col-lg-8">
                <div class="wrap-input100 validate-input" data-validate="Nama Perusahaan">
                    <input id="name" class="input100 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="name" value="<?php echo e(old('name')); ?>" type="text" name="name" placeholder="Nama Perusahaan" autofocus>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Bidang perusahaan">
                    <input id="name" class="input100 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="name" value="<?php echo e(old('name')); ?>" type="text" name="name" placeholder="Bidang" autofocus>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Bidang perusahaan">
                    <input id="name" class="input100 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="name" value="<?php echo e(old('name')); ?>" type="text" name="name" placeholder="Alamat" autofocus>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <span class="focus-input100"></span>
                </div>

                <div class= "col">
                    <div class= "form-file">
                        <label for="formFileLg" class="form-label">Upload Pas Photo</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                </div>

                <div class= "Description" style= "background-color: #FFF0E2">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><strong>Deskripsi</strong></label>
                        <textarea class="form-control" id="message-text" style= "width: 70%"></textarea>
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="focus-input100">Badan Usaha</span>
                    <input type="text" name="text">
                    
                </div>

                <div class= "visi">
                    <h1> Visi & Misi</h1>
                    <div class="wrap-input100 validate-input">
                        <span class="focus-input100">1. Visi</span>
                        <input type="text" name="text">
                        <div class="container-super100-form-btn">
                            <button class="super100-form-btn" type="home" href<?php echo e(route ('login')); ?>>
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
                <div class= "Misi">
                    <div class="wrap-input100 validate-input">
                        <span class="focus-input100">2. Misi</span>
                        <input type="text" name="text">
                        <div class="container-super100-form-btn">
                            <button class="super100-form-btn" type="home" href<?php echo e(route ('login')); ?>>
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>

                <div class= "lowongan">
                    <div class="container-super100-form-btn" style= "padding-top: 10px">
                        <button class="super100-form-btn" type="home" href<?php echo e(route ('login')); ?>>
                            Reset
                        </button>

                        <button class="super100-form-btn" type="home" href<?php echo e(route ('login')); ?>>
                            Simpan
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-2" style= "float: right; margin-top: -600px; border-style: solid; border-color: #FF9837; border-radius: 25px;">
                <div class= "container"></div>
                    <div class= "Website" style= "padding-top: 50px;">
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Website</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                    <div class= "Telepon">
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Telepon</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                    <div class= "Whatsapp">
                        <div class="wrap-input100 validate-input">
                            <span class="focus-input100">Whatsapp</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                    <div class= "Misi">
                        <div class="wrap-input100 validate-input" style= "padding-bottom: 50px">
                            <span class="focus-input100">Email</span>
                            <input type="text" name="text" style= "color: #2F41DF">
                        </div>
                    </div>
                </div>
            </div>
        </form>  
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/pengaturan/profile2.blade.php ENDPATH**/ ?>