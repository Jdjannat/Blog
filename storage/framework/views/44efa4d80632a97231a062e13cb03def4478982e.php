<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 50px;">
            <div class="well">
                <form class="form" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <fieldset>
                        <legend class="text-center"><?php echo e(lang('Login')); ?></legend>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <label class="control-label" for="email"><?php echo e(lang('Email')); ?></label>
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(lang('Input Email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <label class="control-label" for="password"><?php echo e(lang('Password')); ?></label>
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="<?php echo e(lang('Input Password')); ?>" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 offset-md-1">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> <?php echo e(lang('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-success form-control">
                                    <?php echo e(lang('Login')); ?>

                                </button>
                            </div>
                        </div>

                        <?php if(config('services.github.client_id')): ?>
                        <div class="col-md-10 offset-md-1">
                            <div class="strike">
                                <span>or</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <a href="<?php echo e(url('/auth/github')); ?>" class="btn btn-primary form-control">
                                    <i class="fab fa-github"></i> <?php echo e(lang('Login With Github')); ?>

                                </a>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2 text-center">
                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">
                                    <?php echo e(lang('Forgot Password')); ?>

                                </a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/auth/login.blade.php ENDPATH**/ ?>