<ul class="list-group list-group-flush">
    <?php $__empty_1 = true; $__currentLoopData = $discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discussion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="list-group-item">
            <a href="<?php echo e(url('discussion', ['id' => $discussion->id])); ?>"><?php echo e($discussion->title); ?></a>
            <span class="meta">
                in <span class="timeago"><?php echo e($discussion->created_at->diffForHumans()); ?></span>
            </span>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li class="nothing"><?php echo e(lang('Nothing')); ?></li>
    <?php endif; ?>
</ul><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/user/particals/discussions.blade.php ENDPATH**/ ?>