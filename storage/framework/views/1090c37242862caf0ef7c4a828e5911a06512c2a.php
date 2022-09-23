<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key + 1); ?></th>
            <th scope="row"><?php echo e($user->name); ?></th>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->address); ?></td>
            <td>
                <?php if($user->is_approved == 1): ?>
                APPROVED
                <?php elseif($user->is_approved == 2): ?>
                REJECTED
                <?php else: ?>
                PENDING
                <?php endif; ?>
            </td>
            <td>
                <?php if($user->is_approved == 0): ?>
                <a href="<?php echo e(route('approved.user', $user->id)); ?>" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                    <i class="fas fa-check"></i>
                </a> &nbsp;
                <?php endif; ?>
                <?php if($user->is_approved == 0): ?>
                <?php ($user_id = 'reject-form' . $user->id); ?>
                <a onclick="event.preventDefault();
                     document.getElementById('<?php echo e($user_id); ?>').submit();" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject">
                    <span style="cursor: pointer; color:red"><i class="fas fa-close"></i></span>
                </a>
                <form id="<?php echo e($user_id); ?>" action="<?php echo e(route('reject.user',$user->id)); ?>" method="POST" class="d-none reject-form">
                    
                    <?php echo csrf_field(); ?>
                </form>
                <?php endif; ?>
                <a href="<?php echo e(route('all_users.show', $user->id)); ?>" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="View Detail">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="<?php echo e(route('all_users.edit', $user->id)); ?>" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>

                <?php ($user_id = 'delete-form' . $user->id); ?>
                <a onclick="event.preventDefault();
                     document.getElementById('<?php echo e($user_id); ?>').submit();" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                    <span style="cursor: pointer;"><i class="fas fa-trash"></i></span>
                </a>
                <form id="<?php echo e($user_id); ?>" action="<?php echo e(route('all_users.destroy',$user->id)); ?>" method="POST" class="d-none delete-form">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                </form>
                
                
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/all_users/table.blade.php ENDPATH**/ ?>