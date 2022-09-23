<!-- Name Field -->
<div class="mb-1 col-sm-6">
    <?php echo Form::label('name', 'Product Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>
<div class="mb-1 col-sm-6">
    <?php echo Form::label('image', 'Product Image:'); ?>

    <?php echo Form::file('image', null, ['class' => 'form-control']); ?>

</div>
<div class="mb-1 col-sm-12">
    <?php echo Form::label('description', 'Product Description:'); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>
<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('store.index')); ?>" class="btn btn-light">Cancel</a>
</div>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/store/fields.blade.php ENDPATH**/ ?>