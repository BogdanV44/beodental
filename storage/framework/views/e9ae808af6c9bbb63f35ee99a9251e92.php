<?php $__env->startSection('tabTitle'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageTitleFirstWord'); ?>
    Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('slug'); ?>
    login
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

    <div>

        <div class="row justify-content-center">
            <div id="login-box" class="col-xl-4 col-lg-6 col-sm-10 wow fadeInUp">
                <?php if(app('request')->input('fromAppointment')): ?>
                    <?php ($fromAppointment = 1); ?>
                <?php else: ?>
                    <?php ($fromAppointment = 0); ?>
                <?php endif; ?>
                <form action="<?php echo e(route('login', ['fromAppointment' => $fromAppointment])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value=" <?php echo e(old('email')); ?> "/>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"/>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn-default" >Login</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-3">
                    <p class="mb-0">Don't have an account? You can <a href="<?php echo e(route('register', ['fromAppointment' => $fromAppointment])); ?>">register</a>.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-xl-4 col-lg-6 col-sm-10 wow fadeInUp">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="mb-0"><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if(session('error-msg')): ?>
                    <div class="alert alert-danger">
                        <p class="mb-0"><?php echo e(session('error-msg')); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/pages/auth/login.blade.php ENDPATH**/ ?>