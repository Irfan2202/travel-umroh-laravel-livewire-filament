<?php

namespace App\Filament\Resources\Prices;

use App\Filament\Resources\Prices\Pages\CreatePrices;
use App\Filament\Resources\Prices\Pages\EditPrices;
use App\Filament\Resources\Prices\Pages\ListPrices;
use App\Filament\Resources\Prices\Schemas\PricesForm;
use App\Filament\Resources\Prices\Tables\PricesTable;
use App\Models\Prices;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PricesResource extends Resource
{
    protected static ?string $model = Prices::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'prices';

    public static function form(Schema $schema): Schema
    {
        return PricesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PricesTable::configure($table);
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
            'index' => ListPrices::route('/'),
            'create' => CreatePrices::route('/create'),
            'edit' => EditPrices::route('/{record}/edit'),
        ];
    }
}
