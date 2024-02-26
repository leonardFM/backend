<?php

namespace App\Http\Controllers\Api;

use App\Models\Announcement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\AnnouncementResource;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        $announ = Announcement::take(5)->get();
        return ResponseFormatter::success(AnnouncementResource::make($announ), 'Announcement successfully fetched');
    }
}
