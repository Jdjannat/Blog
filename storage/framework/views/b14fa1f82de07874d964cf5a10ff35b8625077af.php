    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo e(config('blog.meta.keywords')); ?>">
    <meta name="description" content="<?php echo e(config('blog.meta.description')); ?>">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href="<?php echo e(config('blog.default_icon')); ?>">

    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>

    <link rel="stylesheet" href="<?php echo e(mix('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/themes/' . config('blog.color_theme') . '.css')); ?>">

    <!-- Scripts -->
    <script>
        window.Language = '<?php echo e(config('app.locale')); ?>';

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <div id="app">
        <?php echo $__env->make('particals.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('particals.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/home.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>

    <script>
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
        });
    </script>

    <?php if(config('blog.google.open')): ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo e(config('blog.google.id')); ?>', 'auto');
        ga('send', 'pageview');
    </script>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/layouts/app.blade.php ENDPATH**/ ?>