<?php

namespace App\Filament\Resources\ServiceVehicleResource\Pages;

use App\Filament\Resources\ServiceVehicleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceVehicles extends ListRecords
{
    protected static string $resource = ServiceVehicleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
