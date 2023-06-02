<div class="sidebar" style="overflow: hidden; background:  linear-gradient(135deg, #FEC163 0%, #DE4313 100%)">
    <nav class="sidebar-nav" >

        <ul class="nav">
            <li class="nav-item">
                <a href="<?php echo e(route("admin.home")); ?>" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    <?php echo e(trans('global.dashboard')); ?>

                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="nav-item nav-dropdown <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'open' : ''); ?> <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'open' : ''); ?> <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'open' : ''); ?>">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        User Management
                    </a>
                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">
                                    </i>
                                    <?php echo e(trans('cruds.permission.title')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.role.title')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.user.title')); ?>

                                </a>
                            </li>
                    </ul>
                </li>
            <?php endif; ?>

            <li class="nav-item nav-dropdown <?php echo e(request()->is('admin/mitra') || request()->is('admin/mitra/*') ? 'open' : ''); ?> <?php echo e(request()->is('admin/lowonganmitra') || request()->is('admin/lowonganmitra/*') ? 'open' : ''); ?>">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-building nav-icon">

                    </i>
                    Mitra Management
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.mitra.index")); ?>" class="nav-link <?php echo e(request()->is('admin/mitra') || request()->is('admin/mitra/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-building nav-icon">

                            </i>
                            Mitra
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.lowonganmitra.index")); ?>" class="nav-link <?php echo e(request()->is('admin/lowonganmitra') || request()->is('admin/lowonganmitra/*') ? 'active' : ''); ?>">
                            <i class="fa fa-address-book nav-icon">

                            </i>
                            Lowongan Mitra
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown ">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-building nav-icon">

                    </i>
                    Kandidat Management
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.kandidat.index')); ?>" class="nav-link <?php echo e(request()->is('admin/kandidat') || request()->is('admin/kandidat/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-users nav-icon">
                            </i>
                            Kandidat
                        </a>
                    </li>
                </ul>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.calonkandidat.index")); ?>" class="nav-link <?php echo e(request()->is('admin/calonkandidat') || request()->is('admin/calonkandidat/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-users nav-icon">
                            </i>
                            Calon Kandidat
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route("admin.jobs.index")); ?>" class="nav-link <?php echo e(request()->is('admin/jobs') || request()->is('admin/jobs/*') ? 'active' : ''); ?>">
                    <i class="fa-fw fas fa-briefcase nav-icon">

                    </i>
                    <?php echo e(trans('cruds.job.title')); ?>

                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route("admin.companies.index")); ?>" class="nav-link <?php echo e(request()->is('admin/companies') || request()->is('admin/companies/*') ? 'active' : ''); ?>">
                    <i class="fa-fw fas fa-building nav-icon">

                    </i>
                    <?php echo e(trans('cruds.company.title')); ?>

                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route("admin.locations.index")); ?>" class="nav-link <?php echo e(request()->is('admin/locations') || request()->is('admin/locations/*') ? 'active' : ''); ?>">
                    <i class="fa-fw fas fa-map-marker-alt nav-icon">

                    </i>
                    <?php echo e(trans('cruds.location.title')); ?>

                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route("admin.categories.index")); ?>" class="nav-link <?php echo e(request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : ''); ?>">
                    <i class="fa-fw fas fa-tags nav-icon">

                    </i>
                    <?php echo e(trans('cruds.category.title')); ?>

                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route("admin.lowongan.index")); ?>" class="nav-link <?php echo e(request()->is('admin/lowongan') || request()->is('admin/lowongan/*') ? 'active' : ''); ?>">
                    <i class="fa fa-address-book nav-icon">

                    </i>
                    Lowongan
                </a>
            </li>




            <li class="nav-item">
                <a href="<?php echo e(route("admin.article.index")); ?>" class="nav-link <?php echo e(request()->is('admin/article') || request()->is('admin/article/*') ? 'active' : ''); ?>">
                    <i class="fa fa-book nav-icon">

                    </i>
                    Article
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route("admin.price.index")); ?>" class="nav-link <?php echo e(request()->is('admin/price') || request()->is('admin/price/*') ? 'active' : ''); ?>">
                    <i class="fa fa-tags nav-icon">

                    </i>
                    Price
                </a>
            </li>

            <li class="nav-item nav-dropdown ">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-map-marker-alt nav-icon">

                    </i>
                    Lokasi 
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="/admin/provinces" class="nav-link <?php echo e(request()->is('admin/province') || request()->is('admin/province/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-map-marker-alt nav-icon">
                            </i>
                            Provinsi
                        </a>
                    </li>
                </ul>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="/admin/cities" class="nav-link <?php echo e(request()->is('admin/cities') || request()->is('admin/cities/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-map-marker-alt nav-icon">
                            </i>
                            Kota
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/admin/cabang" class="nav-link <?php echo e(request()->is('admin/cabang') || request()->is('admin/cabang/*') ? 'active' : ''); ?>">
                    <i class="fa-fw fas fa-map-marker-alt nav-icon">

                    </i>
                    Cabang
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/contact" class="nav-link <?php echo e(request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : ''); ?>">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                    Contact
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
        </ul>

    </nav>
    
</div>

<?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/admin/partials/menu.blade.php ENDPATH**/ ?>