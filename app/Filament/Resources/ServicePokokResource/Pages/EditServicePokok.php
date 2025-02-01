<?php

namespace App\Filament\Resources\ServicePokokResource\Pages;

use App\Filament\Resources\ServicePokokResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicePokok extends EditRecord
{
    protected static string $resource = ServicePokokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
