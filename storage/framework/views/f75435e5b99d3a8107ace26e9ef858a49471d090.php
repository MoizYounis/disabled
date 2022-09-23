<!-- Name Field -->
<div class="mb-1 col-sm-12">
    <?php echo Form::label('name', 'Service Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>
<div class="mb-1 col-sm-12">
    <?php echo Form::label('description', 'Service Description:'); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>
<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('service.index')); ?>" class="btn btn-light">Cancel</a>
</div>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/service/fields.blade.php ENDPATH**/ ?>