<?php

namespace App\Filament\Resources\StatistikWargaResource\Pages;

use App\Filament\Resources\StatistikWargaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatistikWarga extends EditRecord
{
    protected static string $resource = StatistikWargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
