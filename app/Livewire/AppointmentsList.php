<?php

namespace App\Livewire;

use App\Filament\Tables\Columns\CancelAppointmentColumn;
use App\Models\Appointment;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Livewire\Component;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;

class AppointmentsList extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithSchemas;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Appointment::query()
                        ->where('fk_patient_id', '=', auth()->user()->patient->patient_id ?? 0))
            ->columns([
                TextColumn::make('appointment_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('dentist.first_name')
                    ->label('Dentist')
                    ->getStateUsing(fn ($record) => $record->dentist->first_name . ' ' . $record->dentist->last_name)
                    ->numeric(),
                TextColumn::make('hour.name')
                    ->label('Hour'),
                TextColumn::make('service.name')
                    ->label('Service')
                    ->numeric(),
                TextColumn::make('appointmentStatus.name')
                    ->label('Status')
                    ->numeric()
                    ->sortable(),
                CancelAppointmentColumn::make('appointmentStatus.appointment_status_id')
                    ->label('')
            ])->defaultSort('appointment_date', 'desc')
            ->recordClasses( fn (Appointment $record) => match ($record->appointmentStatus->name) {
                'Finished' => 'bg-light',
                'Canceled' => 'bg-light',
                default => null
            })
            ->filters([
                //
            ])
            ->recordActions([

            ])
            ->toolbarActions([

            ]);
    }

    public function render() : View
    {
        return view('livewire.appointments-list');
    }
}
