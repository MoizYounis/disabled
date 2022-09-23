<h5>Role: <?php echo e($role->name); ?></h5>


<p>Select the list of permissions that you want to assign to this role.</p>
<?php echo Form::open(['route' => 'roles.assignPermissions']); ?>


<div class="col-sm-12">
    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><b><?php echo e($module->name); ?></b></p>
        <div style="margin-left: 50px;">
        <?php $__currentLoopData = $module->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label>
                <input type="checkbox" name="permission[]" <?php if(in_array($permission->id, $user_permissions)): ?> checked <?php endif; ?> value="<?php echo e($permission->id); ?>" id="permission_<?php echo e($permission->id); ?>"> <?php echo e($permission->display_name); ?>

            </label> &nbsp;&nbsp;&nbsp;
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" style="margin-top: 50px;">
    <?php echo Form::hidden('role_id', $role->id); ?>

    <?php echo Form::submit('Save', ['class' => 'btn btn-primary submitBtn']); ?>

    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-light">Cancel</a>
</div>

<?php echo Form::close(); ?>

<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/roles/show_fields.blade.php ENDPATH**/ ?>