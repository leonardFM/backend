<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UmkmController;
use App\Http\Controllers\Api\AgendaController;
use App\Http\Controllers\Api\FinanceController;
use App\Http\Controllers\Api\ResidentController;
use App\Http\Controllers\Api\AnnouncementController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/announcement', [AnnouncementController::class, 'index']);
Route::get('/announcement/{id}', [AnnouncementController::class, 'id']);


Route::get('/finance/income', [FinanceController::class, 'income']);
Route::get('/finance/expense', [FinanceController::class, 'expense']);

Route::get('/resident', [ResidentController::class, 'headFamily']);

Route::get('/agenda', [AgendaController::class, 'index']);
Route::get('/agenda/{id}', [AgendaController::class, 'id']);

Route::get('/umkm', [UmkmController::class, 'index']);
Route::get('/umkm/{id}', [UmkmController::class, 'id']);
