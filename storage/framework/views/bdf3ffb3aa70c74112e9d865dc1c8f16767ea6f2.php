<div class="mb-1 col-sm-12">
    <?php echo Form::label('heading', 'Heading Text:'); ?>

    <?php echo Form::text('heading', null, ['class' => 'form-control']); ?>

</div>

<!-- Blog Field -->
<div class="mb-1 col-sm-12">
    <?php echo Form::label('blog', 'Write Your Blog:'); ?>

    <?php echo Form::textarea('blog', null, ['class' => 'form-control']); ?>

</div>
<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('blogs.index')); ?>" class="btn btn-light">Cancel</a>
</div>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/blogs/fields.blade.php ENDPATH**/ ?>