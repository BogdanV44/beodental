<?php

namespace App\Filament\Resources\Appointments\Tables;

use App\Models\Dentist;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AppointmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('appointment_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('dentist.first_name')
                    ->label('Dentist')
                    ->getStateUsing(fn ($record) => $record->dentist->first_name . ' ' . $record->dentist->last_name)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('patient.first_name')
                    ->label('Patient')
                    ->getStateUsing(fn ($record) => $record->patient->first_name . ' ' . $record->patient->last_name)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('hour.name')
                    ->label('Hour')
                    ->sortable(),
                TextColumn::make('service.name')
                    ->label('Service')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('appointmentStatus.name')
                    ->label('Status')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort(function (Builder $query): Builder {
                return $query
                    ->orderBy('appointment_date', 'desc')
                    ->orderBy('fk_hour_id', 'desc');
            })
            ->filters([
                Filter::make('appointment_date')
                    ->schema([
                        DatePicker::make('date_from')
                            ->label('From'),
                        DatePicker::make('date_to')
                            ->label('To')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['date_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('appointment_date', '>=', $date),
                            )
                            ->when(
                                $data['date_to'],
                                fn (Builder $query, $date): Builder => $query->whereDate('appointment_date', '<=', $date),
                            );
                    }),
                SelectFilter::make('dentist')
                    ->relationship('dentist', 'first_name')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->first_name . ' ' . $record->last_name),
                SelectFilter::make('patient')
                    ->relationship('patient', 'first_name')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->first_name . ' ' . $record->last_name)
                    ->searchable(),
                SelectFilter::make('service')
                    ->relationship('service', 'name'),
                SelectFilter::make('appointmentStatus')
                    ->relationship('appointmentStatus', 'name')
                    ->label('Status'),
            ], layout: FiltersLayout::AboveContentCollapsible)
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
