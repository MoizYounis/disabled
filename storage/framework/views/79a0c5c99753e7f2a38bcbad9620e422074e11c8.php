<?php $__env->startSection('title'); ?>
<?php echo e($name->role ?? 'Organization'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <!-- Swiper-->
    <style>
        ul {
            list-style-type: disc;
            font-size: 18px;
        }

        p {
            font-size: 20px;
        }
    </style>
    <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img"
            style="background-image: url(&quot;<?php echo e(asset('assets/images/hospital.jpg')); ?>&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-50 justify-content-lg-center align-items-lg-center">
                    <div class="col-lg-12">
                        <div class="bunner-content-modern text-center">
                            <h1 class="main-bunner-title"><?php echo e($name->role ?? 'Organization'); ?></h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">Sr#</th>
                        <th scope="col">Name</th>
                        <?php if(Auth::user()): ?>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <?php endif; ?>
                        <th scope="col">City</th>
                        <th scope="col">Provice</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($key + 1); ?></th>
                            <th scope="row"><?php echo e($organization->name ?? 'N/A'); ?></th>
                            <?php if(Auth::user()): ?>
                            <th scope="row"><?php echo e($organization->email ?? 'N/A'); ?></th>
                            <th scope="row"><?php echo e($organization->phone ?? 'N/A'); ?></th>
                            <?php endif; ?>
                            <th scope="row"><?php echo e($organization->city ?? 'N/A'); ?></th>
                            <th scope="row"><?php echo e($organization->provice->name ?? 'N/A'); ?></th>
                            <th scope="row"><?php echo e($organization->address ?? 'N/A'); ?></th>
                            <td>
                                <a href="<?php echo e(route('organization-services', $organization->id)); ?>" class="action-btn">
                                    
                                    Services
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/organization/organization.blade.php ENDPATH**/ ?>