<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\Patient;
use App\Models\Role;
use Filament\Forms\Components\ModalTableSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Select::make('fk_role_id')
                    ->label('Role')
                    ->relationship('role', 'name')
                    ->options(function(callable $get) {
                        $roles = Role::where('role_id', '>', 1)
                            ->pluck('name', 'role_id')
                            ->toArray();
                        return $roles;
                    })
                    ->required(),
                TextInput::make('password_confirmation')
                    ->label('Confirm password')
                    ->password()
                    ->same('password')
                    ->required(),
                Select::make('fk_patient_id')
                    ->label('Patient')
                    ->options(Patient::whereNull('fk_user_id')->get()->pluck('full_name', 'patient_id')),
            ]);
    }
}
