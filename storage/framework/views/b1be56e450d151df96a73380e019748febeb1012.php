<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Name</th>
            <th scope="col">Service Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($key + 1); ?></th>
                <th scope="row"><?php echo e($service->owner->name); ?></th>
                <th scope="row"><?php echo e($service->service->name); ?></th>
                <th scope="row"><?php echo e($service->owner->email); ?></th>
                <th scope="row"><?php echo e($service->owner->phone); ?></th>
                <th scope="row"><?php echo e($service->message); ?></th>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/services_request/table.blade.php ENDPATH**/ ?>