<?php $__env->startSection('title', $article->title); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('particals.jumbotron'); ?>
        <h4><?php echo e($article->title); ?></h4>

        <h6><?php echo e($article->subtitle); ?></h6>

        <div class="header">
            
            <a href="<?php echo e(url('user/' . $article->user->name)); ?>"><i
                    class="fas fa-user"></i><?php echo e($article->user->name ?? 'null'); ?></a>，
            <?php if(count($article->tags)): ?>
                <i class="fas fa-tags"></i>
                <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('tag', ['tag' => $tag->tag])); ?>"><?php echo e($tag->tag); ?></a>，
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <i class="fas fa-clock"></i><?php echo e($article->published_at->diffForHumans()); ?>

        </div>
    <?php if (isset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b)): ?>
<?php $component = $__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b; ?>
<?php unset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <div class="article container">
        <div class="row text-center">
            <div class="col-md-8 offset-md-2">
                <img alt="<?php echo e($article->slug); ?>" src="<?php echo e($article->page_image); ?>" style="borde-radius:50px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <parse content="<?php echo e($article->content['raw']); ?>"></parse>

                <?php if($article->is_original): ?>
                <?php endif; ?>
                <?php if(config('blog.social_share.article_share')): ?>
                    <div class="footing">
                        <div class="social-share" data-title="<?php echo e($article->title); ?>"
                            data-description="<?php echo e($article->title); ?>"
                            <?php echo e(config('blog.social_share.sites') ? 'data-sites=' . config('blog.social_share.sites') : ''); ?>

                            <?php echo e(config('blog.social_share.mobile_sites') ? 'data-mobile-sites=' . config('blog.social_share.mobile_sites') : ''); ?>

                            initialized></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <comment title="Comments" commentable-type="articles" commentable-id="<?php echo e($article->id); ?>"
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('comment', $article)): ?>
	username="<?php echo e(Auth::user()->name); ?>"
	user-avatar="<?php echo e(Auth::user()->avatar); ?>"
	can-comment
	<?php endif; ?>>
    </comment>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/article/show.blade.php ENDPATH**/ ?>