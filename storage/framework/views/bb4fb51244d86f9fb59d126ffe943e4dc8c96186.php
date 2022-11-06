<?php $__env->startSection('title', 'Region'); ?>

<?php $__env->startSection('content'); ?>
    <div class="font-type">
        <div class="p-md-4" style="background-color: #a2e7f8">
            <h1 class="fw-bold text-center font-type border-bottom border-dark border-2" style="font-size: 75px; margin: 10px 300px">Teyvat</h1>
        </div>
        <?php $__currentLoopData = $post_region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="position-relative font-type">
                <div class="bg-dark">
                    <img src=<?php echo e($post->region_image); ?> class="img-fluid" alt="">
                </div>
                <div class="text-white bg-dark opacity-75 position-absolute top-50 fs-4 text-center">
                    <h1 class="fw-bold border-bottom" style="margin: 25px 300px">~<?php echo e($post->region_name); ?>~</h1>
                    <p class="p-3 m-3"><?php echo e($post->region_description); ?></p>
                </div>
            </div>
    </div>

    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GenshinWeb\resources\views/region.blade.php ENDPATH**/ ?>