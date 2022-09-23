<?php $__env->startSection('title'); ?>
    Stores
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <section class="parallax-container"
        data-parallax-img="<?php echo e(asset('assets/images/thisisengineering-raeng-o6jUolZ7QJk-unsplash.jpg')); ?>">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Stores</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="active">Stores</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <h4 class="text-center mb-3">Stores</h4>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $stores_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store_arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__empty_1 = true; $__currentLoopData = $store_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($store->name); ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Total Products</h6>
                                    <h3 class="card-text"><?php echo e($store->products_count); ?></h3>
                                    <a href="<?php echo e(route('allProducts', $store->id)); ?>" class="card-link">View All
                                        Products</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                       
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <style>
        .w-5 {
            display: none;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/store.blade.php ENDPATH**/ ?>