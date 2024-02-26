<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all();
        return view('admin.resident.index', ['user' => $user]);
    }

    public function detail(Request $request, $id)
    {
        return view('admin.resident.detail', ['user' => $id]);
    }
}
