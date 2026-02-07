<?php

namespace App\Filament\Resources\Appointments\Schemas;

use App\Filament\Resources\Patients\Tables\PatientsTable;
use App\Filament\Resources\Services\Tables\ServicesTable;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Hour;
use Carbon\CarbonPeriod;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\ModalTableSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Carbon\Carbon;

class AppointmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('fk_dentist_id')
                    ->label('Dentist')
                    ->relationship('dentist', 'first_name')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->first_name . ' ' . $record->last_name)
                    ->required()
                    ->afterStateUpdated(function (Set $set) {
                        $set('appointment_date', null);
                    })
                    ->reactive(),
                ModalTableSelect::make('fk_patient_id')
                    ->relationship('patient', 'first_name')
                    ->tableConfiguration(PatientsTable::class)
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->first_name . ' ' . $record->last_name)
                    ->required(),
                DatePicker::make('appointment_date')
                    ->native(false)
                    ->required()
                    ->disabledDates( function(callable $get) {
                        $dentistId = $get('fk_dentist_id');
                        if(!$dentistId) {
                            return [];
                        }

                        $dates = array();

                        $dentist = Dentist::find($dentistId);
                        if($dentist) {
                            $daysOff = $dentist->getDayOffDates();
                            foreach($daysOff as $date) {
                                $dates[] = $date;
                            }
                        }

                        for ($i = strtotime('+1 days'); $i <= strtotime('+365 days'); $i += 86400) {
                            if (date('N',$i) > 5) {
                                $dates[] = date('Y-m-d', $i);
                            }
                        }

                        return $dates;
                    })
                    ->maxDate(now()->addDays(365))
                    ->disabled(function (callable $get) {
                        return is_null($get('fk_dentist_id'));
                    })
                    ->afterStateUpdated(function (Set $set) {
                        $set('fk_hour_id', null);
                    })
                    ->format('Y-m-d')
                    ->reactive(),
                ModalTableSelect::make('fk_service_id')
                    ->relationship('service', 'name')
                    ->tableConfiguration(ServicesTable::class)
                    ->required(),
                Select::make('fk_hour_id_create')
                    ->multiple()
                    ->label('Hour')
                    ->options(function(callable $get) {
                        $returnHours = array();

                        $dentistId = $get('fk_dentist_id');
                        if(!$dentistId) {
                            return [];
                        }

                        $dentist = Dentist::find($dentistId);
                        if($dentist) {
                            $hours = Hour::query()
                                ->where('is_available_for_booking', '=', 1)
                                ->pluck('name', 'hour_id')
                                ->toArray();
                            foreach($hours as $key => $value) {
                                if(!$dentist->isHourAvailable($key, date('Y-m-d', strtotime($get('appointment_date'))))) {
                                    $value .= " (Booked)";
                                }
                                $returnHours[$key] = $value;
                            }
                        }

                        return $returnHours;
                    })
                    ->disableOptionWhen(function (string $value, Get $get) {
                        $dentistId = $get('fk_dentist_id');
                        $dentist = Dentist::find($dentistId);
                        if($dentist->isHourAvailable($value, date('Y-m-d', strtotime($get('appointment_date'))))) {
                            return false;
                        }
                        return true;
                    })
                    ->hiddenOn('edit')
                    ->disabledOn('edit')
                    ->visible(fn (Get $get): bool => $get('fk_dentist_id') && $get('appointment_date'))
                    ->required(),
                Select::make('fk_hour_id')
                    ->label('Hour')
                    ->options(function(callable $get) {
                        $returnHours = array();

                        $dentistId = $get('fk_dentist_id');
                        if(!$dentistId) {
                            return [];
                        }

                        $dentist = Dentist::find($dentistId);
                        if($dentist) {
                            $hours = Hour::query()
                                ->where('is_available_for_booking', '=', 1)
                                ->pluck('name', 'hour_id')
                                ->toArray();
                            foreach($hours as $key => $value) {
                                if(!$dentist->isHourAvailable($key, date('Y-m-d', strtotime($get('appointment_date'))))) {
                                    $value .= " (Booked)";
                                }
                                $returnHours[$key] = $value;
                            }
                        }

                        return $returnHours;
                    })
                    ->disableOptionWhen(function (string $value, Get $get, Appointment $record) {
                        $dentistId = $get('fk_dentist_id');
                        $dentist = Dentist::find($dentistId);

                        if($value == $record->fk_hour_id) {
                            return false;
                        }

                        if($dentist->isHourAvailable($value, date('Y-m-d', strtotime($get('appointment_date'))))) {
                            return false;
                        }

                        return true;
                    })
                    ->hiddenOn('create')
                    ->disabledOn('create')
                    ->required(),
                Select::make('fk_appointment_status_id')
                    ->label('Status')
                    ->relationship('appointmentStatus', 'name')
                    ->hiddenOn('create')
                    ->required(),
                Textarea::make('appointment_note')
                    ->columnSpanFull()
                    ->rows(6),
            ]);
    }

}
