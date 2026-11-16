<?php $__env->startSection('title'); ?>
    Каталог
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
        Категории:
        <select id="select" name="category">
            <?php $__currentLoopData = $allCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if(request()->is('catalog/'.$category->id)): echo 'selected'; endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></a></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <script>
            let select = document.getElementById("select");
            select.addEventListener('change', () => {
                window.location.href = "/catalog/"+ select.value;
            })
        </script>
    </div>
    <div>
        <a href="/category">Добавить Категорию</a>
        <a href="/categories">Все категории</a>
    </div>
    <div class="">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="card" style="max-width: 240px">
                <img src="<?php echo e(asset('images/' . $post->thumbnail?->path)); ?>" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <h4 class="card-title"><?php echo e($post->title); ?></h4>
                    <a class="card-text"
                        href="/catalog/<?php echo e($post->category_id); ?>"><small><?php echo e($post->category?->name); ?></small></a>
                        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <br>
                         <a class="card-text" style="color:red"
                        href="/tag/<?php echo e($tag->id); ?>"><small><?php echo e($tag->name); ?></small></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <p class="card-text"><?php echo e($post->description); ?></p>
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adverts'); ?>
    <h1>Тут реклама</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /srv/http/snicker/resources/views/catalog.blade.php ENDPATH**/ ?>