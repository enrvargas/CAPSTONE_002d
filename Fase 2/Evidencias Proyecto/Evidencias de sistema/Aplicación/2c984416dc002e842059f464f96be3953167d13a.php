<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    
    <?php echo $__env->yieldContent('meta_tags'); ?>
    
    <title>
        <?php echo $__env->yieldContent('title_prefix', config('tablar.title_prefix', '')); ?>
        <?php echo $__env->yieldContent('title', config('tablar.title', 'Tablar')); ?>
        <?php echo $__env->yieldContent('title_postfix', config('tablar.title_postfix', '')); ?>
    </title>
    <title>Dashboard</title>
    <!-- CSS files -->
    <?php if(config('tablar','vite')): ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <?php endif; ?>
    
    <?php echo $__env->yieldContent('tablar_css'); ?>
</head>
<body class="<?php echo $__env->yieldContent('classes_body'); ?>" <?php echo $__env->yieldContent('body_data'); ?>>
<?php echo $__env->yieldContent('body'); ?>
<?php echo $__env->make('tablar::extra.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('tablar_js'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tablarcurso\tablarcurso\resources\views/vendor/tablar/master.blade.php ENDPATH**/ ?>