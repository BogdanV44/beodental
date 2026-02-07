<?php

namespace App\Filament\Resources\Dentists\Pages;

use App\Filament\Resources\Dentists\DentistResource;
use App\Models\Dentist;
use App\Services\Functions;
use Filament\Resources\Pages\CreateRecord;

class CreateDentist extends CreateRecord
{
    protected static string $resource = DentistResource::class;

    public function __construct(
        protected Functions $functions = new Functions()
    ) { }

    protected  function handleRecordCreation(array $data) : \Illuminate\Database\Eloquent\Model
    {
        $order = $data['order'];

        $this->functions->updateOrderOfOtherRecords(Dentist::class, $order);

        return parent::handleRecordCreation($data);
    }
}
