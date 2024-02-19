<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.report.index');
    }

    public function edit(Request $request)
    {
        return view('admin.report.edit-add');
    }

    public function update(Request $request)
    {
        return view('admin.report.index');
    }
}
