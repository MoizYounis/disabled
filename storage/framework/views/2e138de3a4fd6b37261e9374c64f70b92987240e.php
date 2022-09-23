<?php $__env->startSection('title'); ?>
    Product Detail
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
        <h1>Product Detail</h1>
        <div class="section-header-breadcrumb">
            <a href="<?php echo e(route('store.index')); ?>"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    <?php echo $__env->make('store.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            </div>
    </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/store/show.blade.php ENDPATH**/ ?>