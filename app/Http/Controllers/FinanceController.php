<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(Request $request)
    {
        // $finance = Finance::take(10)->get();
        $income = Finance::where('status', 'MASUK')->get();
        // $totalMasuk = $income->sum('nominal');
        
        $total_income = 0;
        foreach ($income as $i) {
            $total_income += floatval($i->nominal);
        }
        $expense = Finance::where('status', 'KELUAR')->get();

        $total_expense = 0;
        foreach ($expense as $i) {
            $total_expense += floatval($i->nominal);
        }

        
        // $totalKeluar = $expense->sum('nominal');
        
        // $total = $totalMasuk - $totalKeluar;
        // $totalFormatted = number_format($total, 2, '.', ',');

        $params = [ 'income' => $income, 'total_income' => $total_income, 'expense' => $expense, 'total_expense' => $total_expense];
        return view('admin.finance.index', $params);
    }

    public function create(Request $request)
    {
        return view('admin.finance.edit-add');
    }

    public function store(Request $request)
    {
        $a = new Finance;
        $a->title = $request->title;
        $a->nominal = $request->nominal;
        $a->status = $request->status;
        $a->save();

        return redirect()->route('finance')->with('success', 'Data berhasil disimpan.');
    }


    public function income()
    {
        $income = Finance::where('status', 'MASUK')->get();
    }
}
