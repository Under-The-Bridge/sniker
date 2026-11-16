<?php $__env->startSection('title'); ?>
    Главная страница
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Salary</th>
        </tr>
        <?php for($i = 0; $i < count($employees); $i++): ?>
            <tr>
                <td><?php echo e($i + 1); ?></td>
                <td><?php echo e($employees[$i]['name']); ?></td>
                <td><?php echo e($employees[$i]['surn']); ?></td>
                <td><?php echo e($employees[$i]['salary']); ?></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/post/show5.blade.php ENDPATH**/ ?>