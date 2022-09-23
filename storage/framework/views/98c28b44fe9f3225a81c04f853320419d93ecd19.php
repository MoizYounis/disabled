<div class="header">
    <div class="header__content">

        <div class="header__content__logo">
            <img src="<?php echo e(asset('assets/images/pwb-hub.png')); ?>" alt="Logo">
        </div>

        <div class="header__content__nav">
            <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>" class="<?php echo e(request()->is('register') ? '_active' : ''); ?>">Register</a>
            <?php endif; ?>
            <?php if(Route::has('login')): ?>
            <a href="<?php echo e(route('login')); ?>" class="<?php echo e(request()->is('login') ? '_active' : ''); ?>">Login</a>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/layouts/app_header.blade.php ENDPATH**/ ?>