<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('fk_category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Textarea::make('description')
                    ->rows(6)
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->required()
                    ->numeric(),
                Section::make(),
                Toggle::make('is_able_for_reservation')
                    ->label('This service can be booked by the users')
                    ->required(),
                Toggle::make('is_active')
                    ->hiddenOn('create')
                    ->required(),
            ]);
    }
}
