<ul class="list-group list-group-flush">
    <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="list-group-item">
            <?php if($comment->commentable): ?>

                <?php if($comment->commentable_type == 'articles'): ?>
                    <a href="<?php echo e(url($comment->commentable->slug)); ?>"><?php echo e($comment->commentable->title); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(url('discussion', ['id' => $comment->commentable_id])); ?>"><?php echo e($comment->commentable->title); ?></a>
                <?php endif; ?>

                <span class="meta">
                    in <span class="timeago"><?php echo e($comment->created_at->diffForHumans()); ?></span>
                </span>

                <parse content="<?php echo e(json_decode($comment->content)->raw); ?>"></parse>

            <?php else: ?>
                <?php echo e(lang('Forbidden')); ?>

            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li class="nothing"><?php echo e(lang('Nothing')); ?></li>
    <?php endif; ?>
</ul><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/user/particals/comments.blade.php ENDPATH**/ ?>