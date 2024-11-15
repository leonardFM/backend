<?php

namespace App\Filament\Resources\EventResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\EventResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;

class DetailHandler extends Handlers
{
    public static bool $public = true;
    public static string | null $uri = '/{id}';
    public static string | null $resource = EventResource::class;


    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        $transformer = static::getApiTransformer();

        return new $transformer($query);
    }
}
