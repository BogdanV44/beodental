<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Functions
{
    public function updateOrderOfOtherRecords($modelClass, $newOrderNum, $recordId = null, $idColumn = '') : void
    {
        try {
            $model = new $modelClass();
            if($recordId != null) {
                $currentRecord = $model::find($recordId);
            }

            // Start - Code to increase records order that are in the same place as the new/edited record and above //
            if($recordId == null || $currentRecord->order >= $newOrderNum) {
                $recordsHigherThanNewPlace = $model::where('order', '>=', $newOrderNum)
                    ->when($recordId != null, function ($query) use ($recordId, $idColumn) {
                        return $query->whereNot($idColumn, $recordId);
                    })
                    ->orderBy('order')->get();
                if (!$recordsHigherThanNewPlace->isEmpty()) {
                    $order = $newOrderNum;
                    foreach ($recordsHigherThanNewPlace as $record) {
                        $record->update(['order' => ++$order]);
                    }
                }
            }
            // End //

            // Start - Update records that are below current record to correct order //
            else if ($recordId != null && $currentRecord->order < $newOrderNum) {
                $recordsThatAreBetweenCurrentAndNewOrder = $model::where('order', '>', $currentRecord->order)
                    ->where('order', '<=', $newOrderNum)
                    ->orderBy('order')->get();
                if(!$recordsThatAreBetweenCurrentAndNewOrder->isEmpty()) {
                    foreach($recordsThatAreBetweenCurrentAndNewOrder as $record) {
                        $record->update(['order' => $record->order - 1]);
                    }
                }
            }
            // End //
        }
        catch (\Throwable $exception) {
            report($exception);
        }
    }
}
