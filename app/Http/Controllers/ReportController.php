<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.report.index');
    }
<<<<<<< HEAD
=======

    public function edit(Request $request)
    {
        return view('admin.report.edit-add');
    }

    public function update(Request $request)
    {
        return view('admin.report.index');
    }
>>>>>>> 5914aa88cc5bd5852d0e8dd617336ef6f862391b
}
