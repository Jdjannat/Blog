<?php if($paginator->hasPages()): ?>
<div class="text-center">
    <div class="pagination pagination-minimal">
        <ul>
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="previous disabled"><span><i class="fas fa-chevron-left"></i></span></li>
            <?php else: ?>
                <li class="previous"><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i class="fas fa-chevron-left"></i></a></li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="disabled"><span><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="active"><span><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="next"><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="fas fa-chevron-right"></i></a></li>
            <?php else: ?>
                <li class="next disabled"><span><i class="fas fa-chevron-right"></i></span></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/pagination/default.blade.php ENDPATH**/ ?>