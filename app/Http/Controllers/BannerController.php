<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banner.index');
    }

    public function read()
    {
        return view('admin.banner.detail');
    }
}
