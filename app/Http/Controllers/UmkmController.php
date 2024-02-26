<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $umkm = Umkm::take(5)->get();
        return view('admin.umkm.index', ['umkm' => $umkm]);
    }

    public function create(Request $request)
    {
        return view('admin.umkm.edit-add');
    }

    public function store(Request $request)
    {
        $a = new Umkm;
        $a->title = $request->title;
        $a->content = $request->content;
        $a->contact = $request->contact;
        $a->image = 'ini path image';
        $a->save();

        return redirect()->route('umkm')->with('success', 'Data berhasil disimpan.');
    }
}
