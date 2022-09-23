<table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Sr#</th>
        <th scope="col">Writen By</th>
        <th scope="col">Blogs</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key + 1); ?></th>
            <th scope="row"><?php echo e($blog->user->name); ?></th>
            <td><?php echo e($blog->blog); ?></td>
            <td>
                
                <a href="<?php echo e(route('blogs.edit', $blog->id)); ?>" class="action-btn">
                    <i class="fas fa-edit"></i>
                </a>
                <?php ($blog_id = 'delete-form' . $blog->id); ?>
                <a  onclick="event.preventDefault();
                     document.getElementById('<?php echo e($blog_id); ?>').submit();">
                    <span style="cursor: pointer"><i class="fa fa-trash"></i></span>
                </a>
                <form id="<?php echo e($blog_id); ?>" action="<?php echo e(route('blogs.destroy',$blog->id)); ?>" method="POST" class="d-none delete-form">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                </form>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/blogs/table.blade.php ENDPATH**/ ?>