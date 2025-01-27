<?php

namespace App\Filament\Resources\FinanceTotalResource\Pages;

use App\Filament\Resources\FinanceTotalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFinanceTotals extends ListRecords
{
    protected static string $resource = FinanceTotalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
