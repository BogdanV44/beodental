<?php

namespace App\Filament\Resources\Appointments\Pages;

use App\Filament\Resources\Appointments\AppointmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListAppointments extends ListRecords
{
    protected static string $resource = AppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs() : array
    {
        return [
            'All' => Tab::make(),
            'Upcoming' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('appointment_date', '>=', now()->subWeek())),
        ];
    }
}
