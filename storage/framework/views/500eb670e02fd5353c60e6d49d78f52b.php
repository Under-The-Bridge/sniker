<?php $__env->startSection('title'); ?>
    О компании
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Инфа о нас!</h1>
    <p>Мы разрабатываем веб приложения</p>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($user['name']); ?>: возраст <?php echo e($user['age']); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/about.blade.php ENDPATH**/ ?>