<?php

namespace App\Filament\Resources\Prices\Pages;

use App\Filament\Resources\Prices\PricesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPrices extends EditRecord
{
    protected static string $resource = PricesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
