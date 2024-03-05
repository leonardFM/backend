<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $agenda = Agenda::take(20)->get();
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'kategori' => 'required|string|in:KEGIATAN,BERITA DUKA',
            'content_type' => 'required|string|in:ARTICLE,VIDEO',
        ]);

        $agenda = new Agenda();
        $agenda->title = $validatedData['title'];
        $agenda->content = $validatedData['content'];
        $agenda->kategori = $validatedData['kategori'];
        $agenda->content_type = $validatedData['content_type'];
        $agenda->user_id = Auth::id();

        $agenda->save();

        return redirect()->route('agenda');
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

    public function edit(Request $request, $id)
    {
        $data = Agenda::find($id);
        return view('admin.agenda.edit-add', ['id' => $data]);
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'kategori' => 'required|string|in:KEGIATAN,BERITA DUKA',
            'content_type' => 'required|string|in:ARTICLE,VIDEO',
        ]);

        $agenda = Agenda::find($id);
        $agenda->update($validatedData);

        return redirect()->route('agenda');
    }


    public function delete($id)
    {
        $announcement = Agenda::findOrFail($id);
        $announcement->delete();
        return redirect()->route('agenda');
    }
}
