<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResidentResource;

class ResidentController extends Controller
{
    public function headFamily()
    {
        $kk = User::take(10)->get();
        return ResponseFormatter::success(ResidentResource::make($kk), 'get head of family successfully fetched');
    }
}
