<?php
namespace App\Filament\Resources\ServiceRumahResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ServiceRumahResource;
use Illuminate\Routing\Router;


class ServiceRumahApiService extends ApiService
{
    protected static string | null $resource = ServiceRumahResource::class;

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
