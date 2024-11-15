<?php

use App\Filament\Resources\UserResource\Api\Handlers\FamilyApiHandler;

Route::get('/families', [FamilyApiHandler::class, 'handler']);