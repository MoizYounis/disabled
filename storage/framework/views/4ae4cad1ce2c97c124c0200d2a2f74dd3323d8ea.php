<?php if($message = Session::get('success')): ?>

<div class="alert alert-success alert-block">

    

    <strong><?php echo e($message); ?></strong>

</div>

<?php endif; ?>



<?php if($message = Session::get('error')): ?>

<div class="alert alert-danger alert-block" style="color: red;">

    

    <strong><?php echo e($message); ?></strong>

</div>

<?php endif; ?>



<?php if($message = Session::get('warning')): ?>

<div class="alert alert-warning alert-block">

    

    <strong><?php echo e($message); ?></strong>

</div>

<?php endif; ?>



<?php if($message = Session::get('info')): ?>

<div class="alert alert-info alert-block">

    

    <strong><?php echo e($message); ?></strong>

</div>

<?php endif; ?>





<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "debug": false,
               // "positionClass": "toast-bottom-full-width",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 9000,
                "extendedTimeOut": 1000
              }
            <?php if(Session::has('error')): ?>
                toastr.error('<?php echo e(Session::get('error')); ?>');
            <?php elseif(Session::has('success')): ?>
                toastr.success('<?php echo e(Session::get('success')); ?>');
            <?php endif; ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/flash-message.blade.php ENDPATH**/ ?>