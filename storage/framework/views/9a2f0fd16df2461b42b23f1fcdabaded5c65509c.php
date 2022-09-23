<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>



 
<style>
    .form-control:focus {
    box-shadow: none;
    border-color: #00796B
}

.profile-button {
    background: #044d44;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #00796B
}

.profile-button:focus {
    background: #00796B;
    box-shadow: none
}

.profile-button:active {
    background: #00796B;
    box-shadow: none
}

.back:hover {
    color: #00796B;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #00796B;
    color: #fff;
    cursor: pointer;
    border: solid 1px #00796B
}
</style>

<?php $__env->startSection('content'); ?>
<div class="container rounded bg-white mt-10 mb-5" style="margin-top: 110px;">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo e($user->name); ?></span><span class="text-black-50"><?php echo e($user->email); ?></span><span> </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" style="color: #5D4037">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo e($user->name); ?>"></div>
                    <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" value="<?php echo e($user->email); ?>" placeholder="email"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo e($user->phone); ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address line 1" value="<?php echo e($user->address); ?>"></div>
                    <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo e($user->city); ?>"></div>
                    
                    <div class="col-md-12"><label class="labels">Province</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo e($user->provinces->name); ?>"></div>
                    
                </div>
                
                
            </div>
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/layouts/profile/index.blade.php ENDPATH**/ ?>