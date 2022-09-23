<table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Sr#</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key + 1); ?></th>
            <td><?php echo e($store->name); ?></td>
            <td><img src="<?php echo e(asset('storage/'.$store->image)); ?>" width="20%" class="img-fluid" alt="<?php echo e($store->name); ?> Image"></td>
            <td><?php echo e($store->description); ?></td>
            <td>
                <a href="<?php echo e(route('store.show', $store->id)); ?>" class="action-btn">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="<?php echo e(route('store.edit', $store->id)); ?>" class="action-btn">
                    <i class="fas fa-edit"></i>
                </a>
                <?php ($store_id = 'delete-form' . $store->id); ?>
                <a  onclick="event.preventDefault();
                     document.getElementById('<?php echo e($store_id); ?>').submit();">
                    <span style="cursor: pointer"><i class="fa fa-trash"></i></span>
                </a>
                <form id="<?php echo e($store_id); ?>" action="<?php echo e(route('store.destroy',$store->id)); ?>" method="POST" class="d-none delete-form">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                </form>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/store/table.blade.php ENDPATH**/ ?>