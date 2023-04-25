<div class="user jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 text-center">
                <img class="avatar rounded-circle" src="<?php echo e($user->avatar); ?>">
            </div>
            <div class="col-sm-5 content">
                <div class="header">
                    <?php echo e($user->nickname ?? $user->name); ?>

                </div>
                <div class="description">
                    <?php echo e($user->description ?? lang('Nothing')); ?>

                </div>
                <?php if(Auth::check()): ?>
                    <div class="actions">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>
                            <a href="<?php echo e(url('user/profile')); ?>" class="btn btn-info btn-sm"><?php echo e(lang('Edit Profile')); ?></a>
                        <?php endif; ?>
                        <?php if(Auth::id() != $user->id): ?>
                            <a  href="javascript:void(0)"
                                class="btn btn-<?php echo e(Auth::user()->isFollowing($user->id) ? 'warning' : 'danger'); ?> btn-sm"
                                onclick="event.preventDefault();
                                         document.getElementById('follow-form').submit();">
                                <?php echo e(Auth::user()->isFollowing($user->id) ? lang('Following') : lang('Follow')); ?>

                            </a>

                            <form id="follow-form" action="<?php echo e(url('user/follow', [$user->id])); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="footer">
                    <?php if($user->github_name): ?>
                    <a class="btn btn-sm btn-primary" target="_blank" href="https://github.com/<?php echo e($user->github_name); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e($user->name); ?>'s Github">
                        <i class="fab fa-github"></i>
                    </a>
                    <?php endif; ?>
                    <?php if($user->website): ?>
                    <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo e($user->website); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e($user->name); ?>'s Website">
                        <i class="fas fa-globe"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-5 user-follow">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo e(url("user/{$user->name}/following")); ?>" class="counter"><?php echo e($user->followings()->count()); ?></a>
                        <a href="<?php echo e(url("user/{$user->name}/following")); ?>" class="text"><?php echo e(lang('Following Num')); ?></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?php echo e(url("user/{$user->name}/discussions")); ?>" class="counter"><?php echo e($user->discussions->count()); ?></a>
                        <a href="<?php echo e(url("user/{$user->name}/discussions")); ?>" class="text"><?php echo e(lang('Discussion Num')); ?></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?php echo e(url("user/{$user->name}/comments")); ?>" class="counter"><?php echo e($user->comments->count()); ?></a>
                        <a href="<?php echo e(url("user/{$user->name}/comments")); ?>" class="text"><?php echo e(lang('Comment Num')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/user/particals/info.blade.php ENDPATH**/ ?>