<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(lang('Articles')); ?></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('discussion')); ?>"><?php echo e(lang('Discussions')); ?></a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Search Box -->
                <form class="form-inline my-2 my-lg-0 search" role="search" method="get" action="<?php echo e(url('search')); ?>">
                  <input class="form-control mr-sm-2" type="search" name="q" placeholder="<?php echo e(lang('Search')); ?>" required>
                </form>

                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('login')); ?>"><?php echo e(lang('Login')); ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(url('register')); ?>"><?php echo e(lang('Register')); ?></a></li>
                <?php else: ?>
                    <li class="nav-item notification">
                        <a class="nav-link" href="<?php echo e(url('user/notification')); ?>"><i class="fas fa-bell">
                            <span class="new"
                            <?php if(Auth::user()->unreadNotifications->count() > 0): ?>
                            style='display: block'
                            <?php endif; ?>
                            >
                            </span>
                        </i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo e(Auth::user()->nickname ?: Auth::user()->name); ?>

                            <b class="caret"></b>&nbsp;&nbsp;
                            <img class="avatar rounded-circle" src="<?php echo e(Auth::user()->avatar); ?>">
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-item"><a href="<?php echo e(url('user', ['name' => Auth::user()->name])); ?>"><i class="fas fa-user"></i><?php echo e(lang('Personal Center')); ?></a></li>
                            <li class="dropdown-item"><a href="<?php echo e(url('setting')); ?>"><i class="fas fa-cog"></i><?php echo e(lang('Settings')); ?></a></li>
                            <?php if(Auth::user()->is_admin): ?>
                                <li class="dropdown-item"><a href="<?php echo e(url('dashboard')); ?>"><i class="fas fa-tachometer-alt"></i><?php echo e(lang('Dashboard')); ?></a></li>
                            <?php endif; ?>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="<?php echo e(url('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i><?php echo e(lang('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(url('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH /opt/lampp/htdocs/React/Vue/blog/resources/views/particals/navbar.blade.php ENDPATH**/ ?>