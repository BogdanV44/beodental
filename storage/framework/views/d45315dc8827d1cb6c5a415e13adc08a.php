<div <?php echo e($getExtraAttributeBag()); ?>>
    <!--[if BLOCK]><![endif]--><?php if($column->isCancellable($getState())): ?>
        <button type="button" class="cancel_button" value="<?php echo e($column->getAppointmentId()); ?>" onclick="openCancelModal(this.value)">Cancle</button>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/filament/tables/columns/cancel-appointment-column.blade.php ENDPATH**/ ?>