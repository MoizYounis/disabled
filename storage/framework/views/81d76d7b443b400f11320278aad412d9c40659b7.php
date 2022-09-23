<?php $__env->startSection('title'); ?>
Blogs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <section class="parallax-container" data-parallax-img="<?php echo e(asset('assets/images/thisisengineering-raeng-o6jUolZ7QJk-unsplash.jpg')); ?>">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Blogs</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 flex-lg-row-reverse justify-content-xl-between">
                <div class="col-xl-4">
                    <div class="block-bordered-left">
                        <div class="row row-40">
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <ul class="list-xxl heading-list">
                        <?php $blogs = \App\Models\Blog::all(); ?>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <section class="section section-lg bg-default">
                            <div class="container">
                                <div class="row row-50">
                                    <div class="col-lg-12 col-xl-12">
                                        <h3><?php echo e($blog->heading); ?></h3>
                                        <!-- Quote Primary-->
                                        <article class="quote-primary">
                                            <div class="quote-primary-body">
                                                <div class="quote-primary-text">
                                                    <p class="q"><?php echo e($blog->blog); ?></p>
                                                </div>
                                            </div>
                                            <div class="quote-primary-footer">
                                                <div class="bg-dot"></div>
                                                <?php $user = \App\Models\User::find($blog->user_id); ?>
                                                <p class="quote-primary-cite"><?php echo e($user->name); ?></p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/typography.blade.php ENDPATH**/ ?>