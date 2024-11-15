<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Resources\UserResource\Api\Handlers\FamilyApiHandler;

Route::get('/', function () {
    return view('welcome');
});



Route::get('api/admin/families', [FamilyApiHandler::class, 'handler']);