<?php

namespace App\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;

class CancelAppointmentColumn extends Column
{
    protected string $view = 'filament.tables.columns.cancel-appointment-column';

    function isCancellable($statusId): bool
    {
        if($statusId === 1) {
            return true;
        }
        return false;
    }

    function getAppointmentId() {
        return $this->record->attributesToArray()['appointment_id'];
    }
}
