<?php $__env->startSection('content'); ?>
    <form action="/category/<?php echo e($category->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="category" class="form-label">Поменять название категории</label>
            <input type="text" class="form-control" id="category" name="name" value="<?php echo e($category->name); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/category/edit.blade.php ENDPATH**/ ?>