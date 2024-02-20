<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(Request $request)
    {
        $finance = Finance::take(10)->get();
        return view('admin.finance.index', ['finance' => $finance]);
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
}
