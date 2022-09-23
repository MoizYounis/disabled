<?php $__env->startSection('content'); ?>

    <style>
        h4 {
            margin-bottom: 40px;
        }

        .forgotpass {
            text-align: right;
            font-weight: 400;
            margin-bottom: 30px;
        }

        span {
            color: #00796B;
        }

        .app-button {
            width: 300px;
        }

        .appa {
            color: #5D4037;
            transition: 0.25s;
            cursor: pointer;
        }

        .appa:hover {
            color: #00796B;
            text-decoration: underline;
        }

        .appa_active {
            color: #5D4037;
        }

        .footer {
            text-align: right;
            margin-bottom: 20px
        }

        .footer a {
            color: #5D4037;
        }

        .footer a:hover {
            color: #00796B;
            text-decoration: underline;
        }

        h4 {
            font-weight: 500
        }

        input {
            width: 85%;
            background: #e9e9ed;
        }

        input:focus~.bar:before,
        input:focus~.bar:after {
            width: 136%;
        }

    </style>

    <div class="body">
        <div class="card-secondary">

            <?php echo $__env->make('layouts.app_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="card-secondary__body">
                <h4> Welcome <span> back</span> </h4>

                <div class="card-secondary__body__content">
                    <form method="POST" action="<?php echo e(route('login')); ?>" style="margin-left: 70px;">
                        <?php echo csrf_field(); ?>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger p-0" style="color: red">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="group">
                            <input id="email" type="text" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label for="email">Email</label>
                        </div>
                        <div class="group">
                            <input type="password" id="password" class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="password" required autocomplete="current-password">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label for="password">Password</label>
                            <a href="<?php echo e(route('password.request')); ?>">Forgot Password</a>
                        </div>

                        

                        <div class="text-center">
                            <button type="submit" class="app-button mt-1">Login &nbsp;<i
                                    class="fa fa-angle-right"></i></button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/auth/login.blade.php ENDPATH**/ ?>