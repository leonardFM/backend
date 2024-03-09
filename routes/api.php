<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UmkmController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\AgendaController;
use App\Http\Controllers\Api\ReportController;
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
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
});

    Route::get('/announcement', [AnnouncementController::class, 'index']);
    Route::get('/announcement/{id}', [AnnouncementController::class, 'id']);

    Route::get('/finance/income', [FinanceController::class, 'income']);
    Route::get('/finance/expense', [FinanceController::class, 'expense']);

    Route::get('/resident', [ResidentController::class, 'headFamily']);
    Route::get('/resident/online', [ResidentController::class, 'allUserOnline']);
    Route::get('/resident/offline', [ResidentController::class, 'allUserOffline']);
    Route::get('/resident/{id}', [ResidentController::class, 'detail']);

    Route::get('/agenda', [AgendaController::class, 'index']);
    Route::get('/agenda/{id}', [AgendaController::class, 'id']);

    Route::get('/umkm/{id}', [UmkmController::class, 'id']);
    Route::get('/umkm', [UmkmController::class, 'index']);

    Route::get('/report', [ReportController::class, 'index']);
    Route::get('/report/{id}', [ReportController::class, 'detail']);
    Route::post('/report_store', [ReportController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



