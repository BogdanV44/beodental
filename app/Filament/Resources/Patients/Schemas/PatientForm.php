<?php

namespace App\Filament\Resources\Patients\Schemas;

use App\Models\Patient;
use App\Models\Role;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use PhpParser\Node\Expr\Empty_;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                Checkbox::make('make_user_account')
                    ->label('Make user account')
                    ->reactive(),

                Section::make(''),

                Section::make('User account')
                    ->schema([
                        TextInput::make('user_email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('password')
                            ->password()
                            ->required(),
                        TextInput::make('password_confirmation')
                            ->label('Confirm password')
                            ->password()
                            ->same('password')
                            ->required(),
                    ])->visible(fn (Get $get): bool => $get('make_user_account'))
                    ->columns(2)
                    ->columnSpanFull()
//                Toggle::make('is_deleted')
//                    ->required(),
            ]);
    }
}
