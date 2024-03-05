<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\UserOffline;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResidentResource;

class ResidentController extends Controller
{
    public function headFamily()
    {
        $kk = User::where('role', 'KEPALA_KELUARGA')->take(10)->get();
        return ResponseFormatter::success(ResidentResource::make($kk), 'get head of family successfully fetched');
    }

    public function detail(Request $request, $id)
    {
        $detail = User::find($id);
        $childNames = User::where('parent_id', $id)->pluck('name')
            ->merge(UserOffline::where('parent_id', $id)->pluck('name'));
        $detail['child'] = $childNames->toArray();
        return ResponseFormatter::success(ResidentResource::make($detail), 'get detail successfully fetched');

    }

    public function allUserOnline()
    {
        $allOnline = User::all();
        return ResponseFormatter::success(ResidentResource::make($allOnline), 'get head of family successfully fetched');
    }

    public function allUserOffline()
    {
        $allOffline = UserOffline::all();
        return ResponseFormatter::success(ResidentResource::make($allOffline), 'get head of family successfully fetched');
    }
}
