<?php $__env->startSection('content'); ?>
    <style>
        input, select {
            width: 100%;
            background: #e9e9ed;
        }
        /* active state */
        input:focus ~ .bar:before, input:focus ~ .bar:after {
            width:205%;
        }
        select:focus ~ .bar:before, input:focus ~ .bar:after {
            width:206%;
        }
        .app-button { width: 200px; }

    </style>

    <div class="register-page">
        <div class="register-page__main">

            <?php echo $__env->make('layouts.user_app_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="register-page__main__content">

                <h3 class="first-heading">Enter</h3>
                <h5 class="second-heading">Registration Details</h5>
                <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <?php if($errors->any()): ?>
                            <div class="alert alert-danger p-0" style="color: red;">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="form">
                        <div class="form__main">

                            <div class="form__main__fields">
                                <div class="group">

                                    <?php echo Form::text('first_name', null, ['id' => 'first_name', 'autofocus']); ?>

                                    
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="first_name">First Name</label>
                                </div>
                                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <?php echo Form::text('last_name', null, ['id' => 'last_name', 'autofocus']); ?>

                                    
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="last_name">Last Name</label>
                                </div>
                                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <?php echo Form::email('email', null, ['id' => 'email', 'autofocus', 'autocomplete' => 'email']); ?>


                                    
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="email">Email</label>
                                </div>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <?php echo Form::number('phone', null, ['id' => 'phone', 'autofocus']); ?>

                                    
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="phone">Phone</label>
                                </div>
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <?php
                            $provinces = \App\Models\Province::all();
                            ?>

                            <div class="form__main__fields">
                                <div class="group">
                                    <select name="province" id=""  style="margin-top: 2px; color: #000;">
                                        <option value="" selected style="color: #999;">-- Select Province --</option>
                                        <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" style="color: #5D4037;"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <?php $__errorArgs = ['province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <?php echo Form::text('city', null, ['id' => 'city', 'autofocus']); ?>

                                    
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="city">City*</label>
                                </div>
                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <?php echo Form::text('address', null, ['id' => 'address', 'autofocus']); ?>

                                    
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="address">Address</label>
                                </div>
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <?php
                            $roles = \App\Models\Role::all();
                            ?>

                            <div class="form__main__fields">
                                <div class="group">
                                    <select name="role_id" id="role_id"  style="margin-top: 2px; color: #000;">
                                        <option value="" style="color: #999">-- Registered As --</option>
                                        <option value="6" style="color: #999">-- User --</option>
                                        <option value="5" style="color: #999">-- Disabled User --</option>
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="file" name="file" id="file" value="" autofocus autocomplete="file" >
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="file"><?php echo e(__('File, (Please Give Your Disability Or Organization Proof!)')); ?></label>
                                </div>
                                <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <?php echo Form::password('password', null, ['id' => 'password', 'autofocus', "autocomplete" => "new-password"]); ?>


                                    

                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="password"><?php echo e(__('Password')); ?></label>
                                </div>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <?php echo Form::password('password_confirmation', null, ['id' => 'password-confirm', 'autofocus', "autocomplete" => "new-password"]); ?>

                                    
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="app-button">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/user_auth/register.blade.php ENDPATH**/ ?>