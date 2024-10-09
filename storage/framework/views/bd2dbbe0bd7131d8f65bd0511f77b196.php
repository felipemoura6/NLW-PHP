<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremias</title>
</head>
<body>
    Oi Jeremias

    <?php $__currentLoopData = range(1,20); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li><?php echo e($key); ?></li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(auth()->guard()->check()): ?>
        <span>Você está autenticado</span>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\Users\Pichau\Desktop\Codigos\freelance-hours\resources\views/teste/jeremias.blade.php ENDPATH**/ ?>