<?php

namespace App\Filament\Resources\ServiceVehicleResource\Pages;

use App\Filament\Resources\ServiceVehicleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceVehicle extends EditRecord
{
    protected static string $resource = ServiceVehicleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
