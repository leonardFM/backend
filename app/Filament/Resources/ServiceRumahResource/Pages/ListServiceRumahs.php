<?php

namespace App\Filament\Resources\ServiceRumahResource\Pages;

use App\Filament\Resources\ServiceRumahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceRumahs extends ListRecords
{
    protected static string $resource = ServiceRumahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
