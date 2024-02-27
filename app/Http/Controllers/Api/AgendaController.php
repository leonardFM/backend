<?php

namespace App\Http\Controllers\Api;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\AgendaResource;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $agenda = Agenda::take(5)->get();
        return ResponseFormatter::success(AgendaResource::make($agenda), 'Agenda successfully fetched');
    }

    public function id(Request $request, $id)
    {
        $agendaId = Agenda::find($id);
        return ResponseFormatter::success(AgendaResource::make($agendaId), 'Agenda by id successfully fetched');
    }
}
