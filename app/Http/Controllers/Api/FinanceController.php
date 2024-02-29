<?php

namespace App\Http\Controllers\Api;

use App\Models\Finance;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\FinanceResource;

class FinanceController extends Controller
{
    public function income()
    {
        $income = Finance::where('status', 'MASUK')->take(5)->get();
        return ResponseFormatter::success(FinanceResource::make($income), 'Finance income successfully fetched');
    }

    public function expense()
    {
        $expense = Finance::where('status', 'KELUAR')->take(5)->get();
        return ResponseFormatter::success(FinanceResource::make($expense), 'Finance expense successfully fetched');
    }
}
