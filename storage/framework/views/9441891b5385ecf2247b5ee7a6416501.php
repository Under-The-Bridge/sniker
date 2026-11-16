<?php $__env->startSection('title'); ?>
    Главная страница
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Добро пожаловать на сайт!</h1>
    <p>Здесь полезная инфа</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adverts'); ?>
    <h1>ТОЛЬКО СЕГОДНЯ! АКЦИЯ! 1 + 1 = 3</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/home.blade.php ENDPATH**/ ?>