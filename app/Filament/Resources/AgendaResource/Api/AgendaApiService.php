<?php
namespace App\Filament\Resources\AgendaResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\AgendaResource;
use Illuminate\Routing\Router;


class AgendaApiService extends ApiService
{
    protected static string | null $resource = AgendaResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
