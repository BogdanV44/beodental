<?php

namespace App\Filament\Resources\SurgeryChairs\Pages;

use App\Filament\Resources\SurgeryChairs\SurgeryChairResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSurgeryChairs extends ListRecords
{
    protected static string $resource = SurgeryChairResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            CreateAction::make(),
        ];
    }
}
