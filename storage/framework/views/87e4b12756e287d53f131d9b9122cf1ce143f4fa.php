<div class="container list">
    <div class="row">
        <ul class="list-unstyled col-md-10 offset-md-1">
            <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="media">
                    <?php if($article->page_image): ?>
                        <a class="media-left mr-3" href="<?php echo e(url($article->slug)); ?>">
                            <img alt="<?php echo e($article->slug); ?>" src="<?php echo e($article->page_image); ?>" data-holder-rendered="true">
                        </a>
                    <?php endif; ?>
                    <div class="media-body">
                        <h6 class="media-heading">
                            <a href="<?php echo e(url($article->slug)); ?>">
                                <?php echo e($article->title); ?>

                            </a>
                        </h6>
                        <div class="meta">
                            <span class="cinema"><?php echo e($article->subtitle); ?></span>
                        </div>
                        <div class="description">
                            <?php echo e($article->meta_description); ?>

                        </div>
                        <div class="extra">
                            <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url('tag', ['tag' => $tag->tag])); ?>">
                                    <div class="label"><i class="fas fa-tag"></i><?php echo e($tag->tag); ?></div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="info">
                                <a href="<?php echo e(url('user/' . $article->user->name)); ?>"> <i class="fas fa-user" ></i> <?php echo e($article->user->name ?? 'null'); ?></a>&nbsp;,&nbsp;
                                    <i class="fas fa-clock"></i><?php echo e($article->published_at->diffForHumans()); ?>&nbsp;,&nbsp;
                                    <i class="fas fa-eye"></i><?php echo e($article->view_count); ?>

                                    <i class="fas fa-comments"></i><?php echo e($article->comments->count()); ?>

                                    <a href="<?php echo e(url($article->slug)); ?>" class="float-right">
                                        Read More <i class="fas fa-chevron-right"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h3 class="text-center"><?php echo e(lang('Nothing')); ?></h3>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/widgets/article.blade.php ENDPATH**/ ?>