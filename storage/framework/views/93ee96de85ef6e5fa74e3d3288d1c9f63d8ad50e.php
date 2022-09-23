<!-- Name Field -->
<div class="mb-1">
    <?php echo Form::label('name', 'Prduct Name:'); ?>

    <h3><?php echo e($store->name); ?></h3>
</div>

<!-- Created At Field -->
<div class="mb-1">
    <?php echo Form::label('created_at', 'Product Image:'); ?>

<img src="<?php echo e(asset('storage/'.$store->image)); ?>" width="50%" height="50%" alt="">
</div>

<!-- Updated At Field -->
<div class="mb-1">
    <?php echo Form::label('updated_at', 'Product Description:'); ?>

    <h5><?php echo e($store->description); ?></h5>
</div>

<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/store/show_fields.blade.php ENDPATH**/ ?>