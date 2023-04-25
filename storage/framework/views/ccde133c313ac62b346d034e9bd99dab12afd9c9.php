<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('particals.jumbotron'); ?>

        <h3><?php echo e(config('blog.article.title')); ?></h3>

        <h6><?php echo e(config('blog.article.description')); ?></h6>
    <?php if (isset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b)): ?>
<?php $component = $__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b; ?>
<?php unset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <?php echo $__env->make('widgets.article', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e($articles->links('pagination.default')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/article/index.blade.php ENDPATH**/ ?>