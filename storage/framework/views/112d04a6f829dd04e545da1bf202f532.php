<div class="modal modal_confirmation" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 20vh;">
            <form method="POST" name="smdFormOffer_new" action="" id="smdFormOffer_new" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title">Appointment cancellation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="min-height: 10vh; min-width: 50vh;">
                    <tr>
                        <p class="modal-message">Are you sure you want to cancel the appointment?</p>
                    </tr>
                    <tr>
                        <p class="mb-1">Message *</p>
                    </tr>
                    <tr>
                        <textarea class="form-control" name="appointment_note" id="appointment_note" cols="30" rows="7"></textarea>
                    </tr>
                    <div id="error-message" class="">
                        <div class="alert alert-danger mt-3">
                            <p class="mb-0">Message is a required field.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="confirm-button" type="button" class="btn btn-danger">Confirm</button>
                    <button type="button" class="btn btn-secondary close-button" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/partials/cancle-appointment-modal.blade.php ENDPATH**/ ?>