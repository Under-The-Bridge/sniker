<?php $__env->startSection('content'); ?>
    <?php for($i = 1; $i <= 21; $i++): ?>
        <a class="nav-link link-primary" href="/practice/<?php echo e($i); ?>">Практика <?php echo e($i); ?></a>
    <?php endfor; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/practice/index.blade.php ENDPATH**/ ?>