<?php

namespace App\Filament\Resources\SurgeryChairs;

use App\Filament\Resources\SurgeryChairs\Pages\CreateSurgeryChair;
use App\Filament\Resources\SurgeryChairs\Pages\EditSurgeryChair;
use App\Filament\Resources\SurgeryChairs\Pages\ListSurgeryChairs;
use App\Filament\Resources\SurgeryChairs\Schemas\SurgeryChairForm;
use App\Filament\Resources\SurgeryChairs\Tables\SurgeryChairsTable;
use App\Models\SurgeryChair;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class SurgeryChairResource extends Resource
{
    protected static ?string $model = SurgeryChair::class;

   public static function canCreate(): bool
   {
       return false;
   }

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SurgeryChairForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SurgeryChairsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSurgeryChairs::route('/'),
            'create' => CreateSurgeryChair::route('/create'),
            'edit' => EditSurgeryChair::route('/{record}/edit'),
        ];
    }
}
