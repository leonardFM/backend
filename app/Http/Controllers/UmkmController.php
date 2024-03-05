<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $umkm = Umkm::take(20)->get();
        return view('admin.umkm.index', ['umkm' => $umkm]);
    }

    public function create(Request $request)
    {
        return view('admin.umkm.edit-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'contact' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan aturan validasi gambar Anda
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('umkm');
        } else {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan.');
        }

        $umkm = new Umkm;
        $umkm->title = $validatedData['title'];
        $umkm->content = $validatedData['content'];
        $umkm->contact = $validatedData['contact'];
        $umkm->image = $path;
        $umkm->save();

        return redirect()->route('umkm')->with('success', 'Data berhasil disimpan.');
    }

    public function read($id)
    {
        $umkmId = Umkm::find($id);
        return view('admin.umkm.detail', ['data' => $umkmId]);
    }

    public function edit(Request $request,$id)
    {
        return view('admin.umkm.edit-add');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'contact' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar bersifat opsional
        ]);

        $umkm = Umkm::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::delete($umkm->image);
            $path = $request->file('image')->store('umkm');
            $umkm->image = $path;
        }

        $umkm->title = $validatedData['title'];
        $umkm->content = $validatedData['content'];
        $umkm->contact = $validatedData['contact'];
        $umkm->save();

        return redirect()->route('umkm')->with('success', 'Data berhasil diperbarui.');
    }

}
