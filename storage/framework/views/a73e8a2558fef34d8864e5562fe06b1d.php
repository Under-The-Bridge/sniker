<?php $__env->startSection('title'); ?>
    Главная страница
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <select>
        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option><?php echo e($city); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/post/show10.blade.php ENDPATH**/ ?>