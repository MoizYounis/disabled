<?php $__env->startSection('content'); ?>
    <style>
        input,
        select {
            width: 100%;
            background: #e9e9ed;
        }

        /* active state */
        input:focus~.bar:before,
        input:focus~.bar:after {
            width: 205%;
        }

        select:focus~.bar:before,
        input:focus~.bar:after {
            width: 206%;
        }

        .app-button {
            width: 200px;
        }
    </style>

    <div class="register-page">
        <div class="register-page__main">

            <?php echo $__env->make('layouts.app_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="register-page__main__content">

                <h3 class="first-heading">Enter</h3>
                <h5 class="second-heading">Registration Details</h5>
                <form method="POST" action="<?php echo e(route('register')); ?>" name="form1" enctype="multipart/form-data">
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

                                    <?php echo Form::text('first_name', null, ['id' => 'first_name', 'autofocus', 'required']); ?>

                                    
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
                                    <?php echo Form::text('last_name', null, ['id' => 'last_name', 'autofocus', 'required']); ?>

                                    
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
                                    <?php echo Form::email('email', null, ['id' => 'email', 'autofocus', 'autocomplete' => 'email', 'required', 'pattern' => "[a-z0-9]+@gmail.com"]); ?>


                                    
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
                                    <?php echo Form::number('phone', null, ['id' => 'phone', 'autofocus', 'required']); ?>

                                    
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
                                    
                                    
                                    <?php ($provinceArr = []); ?>
                                    <?php ($provinceArr[''] = '-- Select Province --'); ?>
                                    <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php ($provinceArr[$province->id] = $province->name); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo Form::select('province', $provinceArr, null, ['id' => 'province', 'required']); ?>


                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="province">Provinces</label>
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
                                    <?php echo Form::text('city', null, ['id' => 'city', 'autofocus', 'required']); ?>

                                    
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
                                    <?php echo Form::text('address', null, ['id' => 'address', 'autofocus', 'required']); ?>

                                    
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
                                    

                                    <?php ($roleArr = []); ?>
                                    <?php ($roleArr[''] = '-- Registered As --'); ?>
                                    <?php echo Form::select(
                                        'role_id',
                                        [
                                            '' => '-- Registered As --',
                                            '2' => '-- NGO --',
                                            '3' => '-- School --',
                                            '4' => '-- Hospital --',
                                            '7' => '-- Store --',
                                            '5' => '-- Disabled User --',
                                            '6' => '-- User --',
                                        ],
                                        null,
                                        ['id' => 'role_id', 'required'],
                                    ); ?>

                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="role_id">Roles</label>
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
                                    <input type="file" name="file" id="file" value="" autofocus
                                        autocomplete="file">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label
                                        for="file"><?php echo e(__('File, (Please Give Your Disability Or Organization Proof!)')); ?></label>
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
                                    <?php echo Form::password('password', null, [
                                        'id' => 'password',
                                        'autofocus',
                                        'autocomplete' => 'new-password',
                                        'required' => true,
                                    ]); ?>

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
                                    <?php echo Form::password('password_confirmation', null, [
                                        'id' => 'password-confirm',
                                        'autofocus',
                                        'autocomplete' => 'new-password',
                                        'required' => true,
                                    ]); ?>

                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" onclick="ValidateEma(document.form1.email)" class="app-button">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    li {
        list-style-type: none;
        font-size: 16pt;
    }

    .mail {
        margin: auto;
        padding-top: 10px;
        padding-bottom: 10px;
        width: 400px;
        background:
            #D8F1F8;
        border: 1px soild silver;
    }

    .mail h2 {
        margin-left: 38px;
    }

    input {
        font-size: 20pt;
    }

    input:focus,
    textarea:focus {
        background-color:
            lightyellow;
    }

    input submit {
        font-size: 12pt;
    }

    .rq {
        color:
            #FF0000;
        font-size: 10pt;
    }
</style>
<script>
    function ValidateEmail(inputText) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (inputText.value.match(mailformat)) {
            alert("Valid email address!");
            document.form1.email.focus();
            return true;
        } else {
            alert("You have entered an invalid email address!");
            document.form1.email.focus();
            return false;
        }
    }
</script>

<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/auth/register.blade.php ENDPATH**/ ?>