<div class="header">
    <div class="header__content">

        <div class="header__content__logo">
            <img src="<?php echo e(asset('assets/images/pwb-hub.png')); ?>" alt="Logo">
        </div>

        <div class="header__content__nav">
            <?php if(Route::has('userRegisterView')): ?>
            <a href="<?php echo e(route('userRegisterView')); ?>" class="<?php echo e(request()->is('userRegisterView') ? '_active' : ''); ?>">Register</a>
            <?php endif; ?>
            <?php if(Route::has('userLoginView')): ?>
            <a href="<?php echo e(route('userLoginView')); ?>" class="<?php echo e(request()->is('userLoginView') ? '_active' : ''); ?>">Login </a>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/layouts/user_app_header.blade.php ENDPATH**/ ?>