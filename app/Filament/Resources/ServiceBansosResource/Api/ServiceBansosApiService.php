<?php
namespace App\Filament\Resources\ServiceBansosResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ServiceBansosResource;
use Illuminate\Routing\Router;


class ServiceBansosApiService extends ApiService
{
    protected static string | null $resource = ServiceBansosResource::class;

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
