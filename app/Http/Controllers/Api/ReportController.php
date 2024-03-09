<?php

namespace App\Http\Controllers\Api;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ReportResource;

class ReportController extends Controller
{
    public function index()
    {
        $report = Report::all();
        return ResponseFormatter::success(ReportResource::make($report), 'Report successfully fetched');
    }

    public function detail($id)
    {
        $reportId = Report::find($id);
        return ResponseFormatter::success(ReportResource::make($reportId), 'Report by id successfully fetched');
    }

    public function store(Request $request)
    {
        $report = new Report;
        $report->title = $request->title;
        $report->content = $request->content;
        $report->kategori = $request->kategori;
        $report->user_id = Auth::id() ?? 1;
        $report->status = 'MASUK';
        $report->save();
    }
}
