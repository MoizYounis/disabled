<?php $__env->startSection('title'); ?>
    Edit Blog
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Edit Blog</h3>
                
            </div>
  <div class="content">
              <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    <?php echo Form::model($blog, ['route' => ['blogs.update', $blog->id], 'method' => 'patch']); ?>

                                        <div class="row">
                                            <?php echo $__env->make('blogs.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>

                                    <?php echo Form::close(); ?>

                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/blogs/edit.blade.php ENDPATH**/ ?>