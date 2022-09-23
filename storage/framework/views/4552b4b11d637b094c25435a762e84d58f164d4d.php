<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($key + 1); ?></th>
                <th scope="row"><?php echo e($service->name); ?></th>
                <th scope="row"><?php echo e($service->description); ?></th>
                <td>
                    
                    <a href="<?php echo e(route('service.edit', $service->id)); ?>" class="action-btn">
                        <i class="fas fa-edit"></i>
                    </a>
                    <?php ($service_id = 'delete-form' . $service->id); ?>
                    <a
                        onclick="event.preventDefault();
                     document.getElementById('<?php echo e($service_id); ?>').submit();">
                        <span style="cursor: pointer"><i class="fa fa-trash"></i></span>
                    </a>
                    <form id="<?php echo e($service_id); ?>" action="<?php echo e(route('service.destroy', $service->id)); ?>" method="POST"
                        class="d-none delete-form">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/service/table.blade.php ENDPATH**/ ?>