<table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Sr#</th>
        <th scope="col">Name</th>
        <th scope="col">Guard Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key + 1); ?></th>
            <td><?php echo e($role->name); ?></td>
            <td><?php echo e($role->guard_name); ?></td>
            <td>
                <a href="<?php echo e(route('roles.show', $role->id)); ?>" class="action-btn">
                    <i class="fas fa-eye"></i>
                </a>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/roles/table.blade.php ENDPATH**/ ?>