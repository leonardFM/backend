<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.announcement.index');
    }

    public function create(Request $request)
    {
        return view('admin.announcement.edit-add');
    }

    public function store(Request $request)
    {
        return view('admin.announcement.edit-add');
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
