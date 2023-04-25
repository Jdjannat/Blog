<footer id="footer" class="footer">
    <div class="container text-center">
        <div class="row content">
            <div class="col-md-4 offset-md-4">
                <ul class="connect">
                    <li class="mx-2">
                        <a href="<?php echo e(url('/')); ?>">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <?php if(config('blog.footer.github.open')): ?>
                    <li class="mx-2">
                        <a href="<?php echo e(config('blog.footer.github.url')); ?>" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(config('blog.footer.twitter.open')): ?>
                    <li class="mx-2">
                        <a href="<?php echo e(config('blog.footer.twitter.url')); ?>" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="links">
                    <a href="<?php echo e(url('link')); ?>"><?php echo e(lang('Links')); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right text-center">
        <span><?php echo config('blog.footer.meta'); ?></span>
    </div>
</footer>
<?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/particals/footer.blade.php ENDPATH**/ ?>