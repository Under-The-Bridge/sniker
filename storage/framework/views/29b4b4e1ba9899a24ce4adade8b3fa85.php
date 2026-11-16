<?php $__env->startSection('title'); ?>
    Главная страница
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Salary</th>
        </tr>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($employee['salary'] < 2000): ?>
                <?php continue; ?>
            <?php endif; ?>
            <tr>
                <td><?php echo e($employee['name']); ?></td>
                <td><?php echo e($employee['surn']); ?></td>
                <td><?php echo e($employee['salary']); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/post/show6.blade.php ENDPATH**/ ?>