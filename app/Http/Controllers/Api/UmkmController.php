<?php

namespace App\Http\Controllers\Api;

use App\Models\Umkm;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\UmkmResource;

class UmkmController extends Controller
{
    public function index()
    {
        $umkm = Umkm::take(5)->get();
        return ResponseFormatter::success(UmkmResource::make($umkm), 'Umkm successfully fetched');
    }

    public function id($id)
    {
        $umkmId = Umkm::find($id);
        return ResponseFormatter::success(UmkmResource::make($umkmId), 'Umkm by id successfully fetched');
    }
}
