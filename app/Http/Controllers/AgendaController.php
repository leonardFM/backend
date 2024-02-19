<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.agenda.index');
    }
<<<<<<< HEAD
=======

    public function read(Request $request, $id)
    {
        return view('admin.agenda.detail');
    }

    public function create(Request $request)
    {
        return view('admin.agenda.edit-add');
    }
>>>>>>> 5914aa88cc5bd5852d0e8dd617336ef6f862391b
}
