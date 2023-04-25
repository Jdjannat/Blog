<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')); ?> Dashboard</title>

    <link rel="shortcut icon" href="<?php echo e(config('blog.default_icon')); ?>">

    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <style>
        [v-cloak] { display: none; }
    </style>

    <script>
        window.Laravel = {
            csrfToken: "<?php echo e(csrf_token()); ?>"
        }

        window.User = <?php echo Auth::user(); ?>


        window.Permissions = <?php echo Auth::user()->getAllPermissions()->pluck('name'); ?>


        window.isSuperAdmin = <?php echo Auth::user()->isSuperAdmin(); ?>


        window.Language = "<?php echo e(config('app.locale')); ?>"
    </script>
</head>
<body>
    <div id="app"></div>

    <script src="<?php echo e(mix('js/app.js')); ?>"></script>

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
<?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/dashboard/index.blade.php ENDPATH**/ ?>