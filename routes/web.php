<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BannerController;








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



// AUTH
Route::get('/', [AuthController::class, 'login'])->name('login_page');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');;
Route::get('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'store'])->name('register');

// DASHBOARD
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ANNOUNCEMENT
    Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement');
    Route::get('/announcement/{id}', [AnnouncementController::class, 'read'])->name('announcement_detail');
    Route::get('/announcement_create', [AnnouncementController::class, 'create'])->name('announcement_create');
    Route::post('/announcement_store', [AnnouncementController::class, 'store'])->name('announcement_store');
    Route::get('/announcement_update', [AnnouncementController::class, 'edit'])->name('announcement_update');
    Route::put('/announcement_update', [AnnouncementController::class, 'udpate'])->name('announcement_create');
    Route::get('/announcement_publish/{id}', [AnnouncementController::class, 'publish'])->name('announcement_publish');

    // AGENDA
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
    Route::get('/agenda/{id}', [AgendaController::class, 'read'])->name('agenda_detail');
    Route::get('/agenda_create', [AgendaController::class, 'create'])->name('agenda_create');
    Route::post('/agenda_store', [AgendaController::class, 'store'])->name('agenda_store');
    Route::get('/agenda_update/{id}', [AgendaController::class, 'edit'])->name('agenda_update');
    Route::post('/agenda_update/{id}', [AgendaController::class, 'update'])->name('agenda_update');
    Route::delete('/agenda_delete/{id}', [AgendaController::class, 'delete'])->name('agenda_delete');
    Route::get('/agenda_publish/{id}', [AgendaController::class, 'publish'])->name('agenda_publish');

    // FINANCE
    Route::get('/finance', [FinanceController::class, 'index'])->name('finance');
    Route::get('/iuran', [FinanceController::class, 'iuran'])->name('iuran');
    Route::get('/finance_create', [FinanceController::class, 'create'])->name('finance_create');
    Route::post('/finance_store', [FinanceController::class, 'store'])->name('finance_store');
    Route::get('/finance_update', [FinanceController::class, 'edit'])->name('finance_update');
    Route::put('/finance_update', [FinanceController::class, 'update'])->name('finance_update');
    Route::put('/finance_income', [FinanceController::class, 'income'])->name('finance_income');
    Route::put('/finance_expense', [FinanceController::class, 'expense'])->name('finance_expense');

    // REPORT
    Route::get('/report', [ReportController::class, 'index'])->name('report');
    Route::get('/report/{id}', [ReportController::class, 'detail'])->name('report_detail');
    Route::get('/report_create', [ReportController::class, 'create'])->name('report_create');
    Route::post('/report_store', [ReportController::class, 'store'])->name('report_store');
    Route::get('/report_status/{id}/{status}', [ReportController::class, 'status'])->name('report_status');

    // UMKM
    Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm');
    Route::get('/umkm/{id}', [UmkmController::class, 'read'])->name('umkm_detail');
    Route::get('/umkm_create', [UmkmController::class, 'create'])->name('umkm_create');
    Route::post('/umkm_store', [UmkmController::class, 'store'])->name('umkm_store');
    Route::get('/umkm_update/{id}', [UmkmController::class, 'edit'])->name('umkm_update');
    Route::post('/umkm_update/{id}', [UmkmController::class, 'update'])->name('umkm_update');

    // RESIDENT
    Route::get('/resident', [ResidentController::class, 'index'])->name('resident');
    Route::get('/resident/all/{role}', [ResidentController::class, 'all_user'])->name('resident_all');
    Route::get('/resident/{id}', [ResidentController::class, 'detail'])->name('resident_detail');
    Route::get('/resident/edit/{id}', [ResidentController::class, 'edit'])->name('resident_edit');
    Route::post('/resident/edit/{id}', [ResidentController::class, 'update'])->name('resident_update');
    Route::post('/resident/offline/{id}', [ResidentController::class, 'user_offline'])->name('resident_offline');


    // LAYANAN WARGA
    Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

    // BANNER
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::get('/banner/{id}', [BannerController::class, 'read'])->name('banner_detail');
});
