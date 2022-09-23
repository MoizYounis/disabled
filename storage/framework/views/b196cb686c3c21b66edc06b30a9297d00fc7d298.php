<?php $__env->startSection('title'); ?>
    All Products
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <section class="parallax-container"
        data-parallax-img="<?php echo e(asset('assets/images/thisisengineering-raeng-o6jUolZ7QJk-unsplash.jpg')); ?>">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">All Products</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="active">All Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <h4 class="text-center mb-3">All Products</h4>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($product->name); ?></h5>
                                <p class="card-text"><?php echo e($product->description); ?></p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                    </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/store/products.blade.php ENDPATH**/ ?>