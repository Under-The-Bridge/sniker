<?php $__env->startSection('title'); ?>
    Главная страница
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <ul>
        <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li
            <?php if($day == $today): ?>
                class="active"
            <?php endif; ?>
            >
                <?php echo e($day); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/post/show11.blade.php ENDPATH**/ ?>