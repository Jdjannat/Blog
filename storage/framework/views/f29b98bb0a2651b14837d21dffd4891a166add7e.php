<?php $__env->startSection('title', $discussion->title); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('particals.jumbotron'); ?>
        <h4><?php echo e($discussion->title); ?></h4>

        <span><i class="fas fa-user" style="margin-right: 10px"></i><?php echo e($discussion->user->name ?? 'null'); ?></span><br/>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $discussion)): ?>
            <a href="<?php echo e(url("discussion/{$discussion->id}/edit")); ?>" class="edit-discuss btn btn-info btn-sm"><i class="fas fa-pencil-alt" style="padding: 0"></i> <?php echo e(lang('Edit Problem')); ?></a>
        <?php endif; ?>
    <?php if (isset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b)): ?>
<?php $component = $__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b; ?>
<?php unset($__componentOriginal3e4da9db24935f90d5999b82a4742bba8c85be7b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <div class="discuss-show container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="media">
                    <div class="media-body box-body">
                        <div class="heading">
                            <i class="fas fa-clock"></i><?php echo e(lang('Published At')); ?> : <?php echo e($discussion->created_at); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-comment"></i><?php echo e(lang('Replies Num')); ?> : <?php echo e($discussion->comments->count()); ?>

                        </div>
                        <div class="discuss-body">
                            <parse content="<?php echo e(json_decode($discussion->content)->raw); ?>"></parse>
                        </div>
                        <?php if(config('blog.social_share.discussion_share')): ?>
                        <div class="footing">
                            <div class="social-share"
                                data-title="<?php echo e($discussion->title); ?>"
                                data-description="<?php echo e($discussion->title); ?>"
                                <?php echo e(config('blog.social_share.sites') ? "data-sites=" . config('blog.social_share.sites') : ''); ?>

                                <?php echo e(config('blog.social_share.mobile_sites') ? "data-mobile-sites=" . config('blog.social_share.mobile_sites') : ''); ?>

                                initialized></div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(Auth::guest()): ?>
        <comment commentable-type="discussions"
                 commentable-id="<?php echo e($discussion->id); ?>"
                 null-text=""></comment>
    <?php else: ?>
        <comment username="<?php echo e(Auth::user()->name); ?>"
                 user-avatar="<?php echo e(Auth::user()->avatar); ?>"
                 commentable-type="discussions"
                 commentable-id="<?php echo e($discussion->id); ?>"
                 null-text=""
                 can-comment></comment>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/discussion/show.blade.php ENDPATH**/ ?>