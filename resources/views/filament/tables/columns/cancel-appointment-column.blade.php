<div {{ $getExtraAttributeBag() }}>
    @if($column->isCancellable($getState()))
        <button type="button" class="cancel_button" value="{{$column->getAppointmentId()}}" onclick="openCancelModal(this.value)">Cancle</button>
    @endif
</div>
