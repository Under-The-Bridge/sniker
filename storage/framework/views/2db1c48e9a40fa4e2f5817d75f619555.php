<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('category_create')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="category" class="form-label">Название категории</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color:red"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/category/add.blade.php ENDPATH**/ ?>