<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav id="top-header-line" class="navbar-expand-lg">
            <div class="container">
                <ul class="d-flex gap-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Auth::check()): ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                    <?php else: ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->fk_role_id < 3): ?>
                            <li>
                                <a href="<?php echo e(url(\App\Filament\Resources\Appointments\AppointmentResource::getUrl('index'))); ?>">Admin</a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo e(route('appointments.index')); ?>">Appointments</a>
                            </li>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST" id="logoutForm">
                                <?php echo csrf_field(); ?>
                                <a  href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="..">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>" width="200px" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$page->has_submenu): ?>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route($page->route)); ?>"><?php echo e($page->name); ?></a></li>
                                    <?php continue; ?>;
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <li class="nav-item submenu">
                                    <a class="nav-link" href="<?php echo e(route($page->route)); ?>"><?php echo e($page->name); ?></a>
                                    <ul>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $page->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route($childPage->route)); ?>"><?php echo e($childPage->name); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </ul>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <li class="nav-item highlighted-menu"><a class="nav-link" href="<?php echo e(route('appointment')); ?>">book appointment</a></li>
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->
                    <div class="header-btn d-inline-flex">
                        <a href="<?php echo e(route('appointment')); ?>" class="btn-default">book appointment</a>
                    </div>
                    <!-- Let’s Start Button End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
<?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/fixed/header.blade.php ENDPATH**/ ?>