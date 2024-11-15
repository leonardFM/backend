<?php
namespace App\Filament\Resources\ServiceUserResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ServiceUserResource;
use Illuminate\Routing\Router;


class ServiceUserApiService extends ApiService
{
    protected static string | null $resource = ServiceUserResource::class;

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
