<?php $__env->startSection('title'); ?>
    Services
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Services</h1>
            <div class="section-header-breadcrumb">
                <a href="<?php echo e(route('service.create')); ?>" class="btn btn-primary form-btn">Service <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                <?php echo $__env->make('service.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
       </div>
   </div>

    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/service/index.blade.php ENDPATH**/ ?>