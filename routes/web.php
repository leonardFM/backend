<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\AgendaController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');;

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store'])->name('register');

Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/finance', [FinanceController::class, 'index'])->name('finance');
Route::get('/report', [FinanceController::class, 'index'])->name('report');