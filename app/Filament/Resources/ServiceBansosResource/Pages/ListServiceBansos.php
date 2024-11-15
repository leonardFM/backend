<?php

namespace App\Filament\Resources\ServiceBansosResource\Pages;

use App\Filament\Resources\ServiceBansosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceBansos extends ListRecords
{
    protected static string $resource = ServiceBansosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
