<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($key + 1); ?></th>
                <th scope="row"><?php echo e($notification->name); ?></th>
                <th scope="row"><?php echo e($notification->email); ?></th>
                <th scope="row"><?php echo e($notification->phone); ?></th>
                <th scope="row"><?php echo e($notification->message); ?></th>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/notifications/table.blade.php ENDPATH**/ ?>