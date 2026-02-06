<?php

namespace App\Filament\Resources\Dentists\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DentistForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('title'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                Textarea::make('short_description')
                    ->columnSpanFull(),
                Textarea::make('biography')
                    ->columnSpanFull(),
                Textarea::make('additional_description')
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->required()
                    ->numeric(),
                FileUpload::make('image_route')
                    ->image()
                    ->maxSize(5120)
                    ->visibility('public'),
                Toggle::make('is_showing')
                    ->label('Show dentist on the website')
                    ->required(),
                Toggle::make('is_active')
                    ->hiddenOn('create')
                    ->required(),
            ]);
    }
}
