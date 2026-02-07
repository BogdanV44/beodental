<?php

namespace App\Filament\Resources\SurgeryChairs\Pages;

use App\Filament\Resources\SurgeryChairs\SurgeryChairResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSurgeryChair extends EditRecord
{
    protected static string $resource = SurgeryChairResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
