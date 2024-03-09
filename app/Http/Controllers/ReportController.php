<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $report = Report::take(10)->get();
        return view('admin.report.index', ['report' => $report]);
    }

    public function detail(Request $request, $id)
    {
        $reportId = Report::find($id);
        return view('admin.report.detail', ['detail' => $reportId]);
    }

    public function create(Request $request)
    {
        return view('admin.report.edit-add');
    }

    public function status(Request $request, $id, $status = 'MASUK')
    {
        $data = Report::find($id);
        $data->status = $status;
        $data->save();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $a = new Report;
        $a->title = $request->title;
        $a->content = $request->content;
        $a->kategori = $request->kategori;
        $a->user_id = Auth::id();
        $a->status = 'MASUK';
        $a->save();

        return redirect()->route('report')->with('success', 'Data berhasil disimpan.');
    }
}
