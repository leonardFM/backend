<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $agenda = Agenda::take(5)->get();
        return view('admin.agenda.index', ['agenda' => $agenda]);
    }


    public function read(Request $request, $id)
    {
        $detail = Agenda::find($id);
        return view('admin.agenda.detail', ['detail' => $detail]);
    }

    public function create(Request $request)
    {
        return view('admin.agenda.edit-add');
    }

    public function store(Request $request)
    {
        $a = new Agenda;
        $a->title = $request->title;
        $a->kategori = $request->kategori;
        $a->content = $request->content;
        $a->image = 'ini path image';
        $a->user_id = Auth::id();
        $a->content_type = $request->content_type;
        $a->save();

        return redirect()->route('agenda')->with('success', 'Data berhasil disimpan.');
    }

    public function publish($id)
    {
        $content = Agenda::find($id);
        $status = $content->status;
        $status = $status ? false : true;
        $content->status = $status;
        $content->save();

        return redirect()->route('agenda');
    }
}
