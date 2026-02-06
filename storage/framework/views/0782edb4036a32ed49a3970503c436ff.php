<?php $__env->startSection('tabTitle'); ?> Appointments <?php $__env->stopSection(); ?>

<?php $__env->startSection('pageTitleFirstWord'); ?> Appointments <?php $__env->stopSection(); ?>
<?php $__env->startSection('slug'); ?> appointments <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/filament/filament/app.css')); ?>" rel="stylesheet" media="screen" />
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <!-- Modals Start -->
    <?php if (isset($component)) { $__componentOriginal5f1d0447695b8e3c22b3148659499611 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f1d0447695b8e3c22b3148659499611 = $attributes; } ?>
<?php $component = App\View\Components\CancelAppointmentModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cancel-appointment-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CancelAppointmentModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f1d0447695b8e3c22b3148659499611)): ?>
<?php $attributes = $__attributesOriginal5f1d0447695b8e3c22b3148659499611; ?>
<?php unset($__attributesOriginal5f1d0447695b8e3c22b3148659499611); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1d0447695b8e3c22b3148659499611)): ?>
<?php $component = $__componentOriginal5f1d0447695b8e3c22b3148659499611; ?>
<?php unset($__componentOriginal5f1d0447695b8e3c22b3148659499611); ?>
<?php endif; ?>
    <!-- Modals End -->

    <!-- Page Appointments Start -->
    <div class="page-appointments">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('appointments-list');

$__html = app('livewire')->mount($__name, $__params, 'lw-1100512976-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Appointments End -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
    <script type="text/javascript" src="<?php echo e(asset('js/pages/appointments.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/pages/special/appointments.blade.php ENDPATH**/ ?>