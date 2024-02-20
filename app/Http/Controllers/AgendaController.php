<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.agenda.index');
    }

    public function read(Request $request, $id)
    {
        return view('admin.agenda.detail');
    }

    public function create(Request $request)
    {
        return view('admin.agenda.edit-add');
    }
}
