<?php

namespace App\Filament\Resources\FinanceTotalResource\Pages;

use App\Filament\Resources\FinanceTotalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFinanceTotal extends EditRecord
{
    protected static string $resource = FinanceTotalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
