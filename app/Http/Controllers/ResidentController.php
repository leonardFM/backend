<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('role', 'KEPALA_KELUARGA');
        return view('admin.resident.index', ['user' => $user->get(), 'count' => $user->count() ]);
    }

    public function detail(Request $request, $id)
    {
        $user = User::find($id);
        $getChild = User::where('parent_id', $id)->get();
        return view('admin.resident.detail', ['user' => $user, 'child' => $getChild]);
    }

    public function edit($id)
    {
        $userId = User::find($id);
        $parent = User::where('role', 'KEPALA_KELUARGA')->get();
        return view('admin.resident.edit-add', ['user' => $userId, 'parent' => $parent]);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->update($request->except('_token'));
        return redirect()->route('resident');
    }
}
