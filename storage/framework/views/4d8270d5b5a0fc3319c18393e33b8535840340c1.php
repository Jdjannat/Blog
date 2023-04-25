<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.particals.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header"><?php echo e(lang('Recent Discussions')); ?></div>

                    <?php echo $__env->make('user.particals.discussions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header"><?php echo e(lang('Recent Comments')); ?></div>

                    <?php echo $__env->make('user.particals.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/user/index.blade.php ENDPATH**/ ?>