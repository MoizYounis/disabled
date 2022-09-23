<?php $__env->startSection('title'); ?>
Notifications
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Notifications</h1>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                <?php echo $__env->make('notifications.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
       </div>
   </div>

    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/notifications/index.blade.php ENDPATH**/ ?>