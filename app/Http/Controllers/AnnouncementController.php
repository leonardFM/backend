<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        $announ = Announcement::take(5)->get();
        return view('admin.announcement.index', ['announ' => $announ ]);
    }

    public function create(Request $request)
    {
        return view('admin.announcement.edit-add');
    }

    public function store(Request $request)
    {
        $a = new Announcement;
        $a->title = $request->title;
        $a->kategori = $request->kategori;
        $a->content = $request->content;
        $a->image = 'ini path image';
        $a->user_id = Auth::id();
        $a->content_type = $request->content_type;
        $a->save();

        return redirect()->route('announcement')->with('success', 'Data berhasil disimpan.');
    }

    public function edit(Request $request, $id)
    {
        return view('admin.announcement.edit-add');
    }

    public function update(Request $request)
    {
        return view('admin.announcement.edit-add');
    }


    public function delete(Request $request)
    {
        return view('admin.announcement.edit-add');
    }

    public function read(Request $request)
    {
        return view('admin.announcement.detail');
    }
}
