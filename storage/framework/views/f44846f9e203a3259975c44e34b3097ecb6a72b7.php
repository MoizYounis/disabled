<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="nav-item">
        <a class="d-flex align-items-center <?php echo e(Route::is('admin*') ? 'active' : ''); ?>" href="<?php echo e(route('admin')); ?>">
            <i data-feather="home"></i>
            <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard
            </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex align-items-center <?php echo e(Route::is('blogs*') ? 'active' : ''); ?>"
            href="<?php echo e(route('blogs.index')); ?>">
            <i data-feather="bold"></i>
            <span class="menu-title text-truncate" data-i18n="Blogs">Blogs
            </span>
        </a>
    </li>
    <?php if(auth()->user()->role == \App\Helpers\Constant::ADMIN || auth()->user()->role == \App\Helpers\Constant::STORE): ?>
        <li class="nav-item">
            <a class="d-flex align-items-center <?php echo e(Route::is('store*') ? 'active' : ''); ?>"
                href="<?php echo e(route('store.index')); ?>">
                <i data-feather="package"></i>
                <span class="menu-title text-truncate" data-i18n="Store">Store
                </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->role != \App\Helpers\Constant::STORE): ?>
        <li class="nav-item">
            <a class="d-flex align-items-center <?php echo e(Route::is('service*') ? 'active' : ''); ?>"
                href="<?php echo e(route('service.index')); ?>">
                <i data-feather="book-open"></i>
                <span class="menu-title text-truncate" data-i18n="Services">Services
                </span>
            </a>
        </li>
    <?php endif; ?>

    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-view')): ?>
        <li class=" nav-item">
            <a class="d-flex align-items-center <?php echo e(Route::is('all_users.index*') ? 'active' : ''); ?>"
                href="<?php echo e(route('all_users.index')); ?>">
                <i data-feather="user"></i>
                <span class="menu-title text-truncate" data-i18n="Users">Users</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->role == \App\Helpers\Constant::ADMIN): ?>
        <li class=" nav-item">
            <a class="d-flex align-items-center <?php echo e(Route::is('notifications.index*') ? 'active' : ''); ?>"
                href="<?php echo e(route('notifications.index')); ?>">
                <i data-feather="bell"></i>
                <span class="menu-title text-truncate" data-i18n="Notifications">Notifications</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->role == \App\Utils\Constant::STORE): ?>
        <li class=" nav-item">
            <a class="d-flex align-items-center <?php echo e(Route::is('all_products_request*') ? 'active' : ''); ?>"
                href="<?php echo e(route('all_products_request')); ?>">
                <i data-feather="bell"></i>
                <span class="menu-title text-truncate" data-i18n="Product Requets">Product Requets</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->role == \App\Utils\Constant::SCHOOL || auth()->user()->role == \App\Utils\Constant::NGO || auth()->user()->role == \App\Utils\Constant::HOSPITAL): ?>
        <li class=" nav-item">
            <a class="d-flex align-items-center <?php echo e(Route::is('all_services_request*') ? 'active' : ''); ?>"
                href="<?php echo e(route('all_services_request')); ?>">
                <i data-feather="bell"></i>
                <span class="menu-title text-truncate" data-i18n="Service Requets">Service Requets</span>
            </a>
        </li>
    <?php endif; ?>
</ul>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>