<?php

namespace App\Filament\Resources\ServiceBansosResource\Pages;

use App\Filament\Resources\ServiceBansosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceBansos extends EditRecord
{
    protected static string $resource = ServiceBansosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
