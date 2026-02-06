<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoryResource;
use App\Models\Category;
use App\Services\Functions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    public function __construct(
        protected Functions $functions = new Functions()
    ) { }

    protected  function handleRecordCreation(array $data) : \Illuminate\Database\Eloquent\Model
    {
        $order = $data['order'];

        $this->functions->updateOrderOfOtherRecords(Category::class, $order);

        return parent::handleRecordCreation($data);
    }
}
