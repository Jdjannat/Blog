<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('particals.jumbotron'); ?>
        <h4><?php echo e(lang('Discuss Problem')); ?></h4>

        <h6><?php echo e(lang('Discuss Subtitle')); ?></h6>

        <a href="<?php echo e(url('discussion/create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> <?php echo e(lang('Submit Problem')); ?></a>
    <?php if (isset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b)): ?>
<?php $component = $__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b; ?>
<?php unset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <div class="discussion container mb-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php $__empty_1 = true; $__currentLoopData = $discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discussion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="media my-3">
                    <div class="media-left mr-3">
                        <a href="<?php echo e(url('discussion', ['id' => $discussion->id])); ?>">
                            <img class="media-object rounded-circle" width="50" src="<?php echo e($discussion->user->avatar ?? config('blog.default_avatar')); ?>">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">
                            <a href="<?php echo e(url('discussion', ['id' => $discussion->id])); ?>">
                                <?php echo e($discussion->title); ?>

                            </a>
                        </h5>
                        <div class="media-conversation-meta">
                            <div class="media-conversation-replies">
                                <a href="<?php echo e(url('discussion', ['id' => $discussion->id])); ?>">
                                    <?php echo e($discussion->comments->count()); ?>

                                </a>
                                <?php echo e(lang('Replies')); ?>

                            </div>
                        </div>
                        <?php echo e($discussion->user->name ?? 'null'); ?>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h3 class="text-center"><?php echo e(lang('Nothing')); ?></h3>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php echo e($discussions->links('pagination.default')); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/discussion/index.blade.php ENDPATH**/ ?>