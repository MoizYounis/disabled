<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>PWD-HUB</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/sass/app.scss')); ?>">
    <link rel="stylesheet" href="../../../public/assets/sass/app.scss">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400%7CRubik:100,400,700">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/fonts.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">

</head>
<body>
    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>

        

        
    </div>
</body>
</html>
<?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/layouts/app_auth.blade.php ENDPATH**/ ?>