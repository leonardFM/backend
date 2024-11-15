<?php

namespace App\Filament\Resources\UserResource\Api\Handlers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Rupadana\ApiService\Http\Handlers;

class FamilyApiHandler extends Handlers
{
    public static string | null $uri = '/families';
    public static string | null $resource = UserResource::class;

    public function handler()
    {
        // Ambil semua pengguna
        $users = User::all();

        // Filter untuk mendapatkan kepala keluarga dan anggota
        $familyData = $this->formatFamilyData($users);

        return response()->json($familyData);
    }

    private function formatFamilyData(Collection $users)
    {
        $families = [];

        // Kumpulkan kepala keluarga
        foreach ($users as $user) {
            if (is_null($user->parent_id)) {
                $families[$user->id] = [
                    'kepalaKeluarga' => $user->name,
                    'anggota' => [], // Awalnya kosong
                ];
            } else {
                if (isset($families[$user->parent_id])) {
                    $families[$user->parent_id]['anggota'][] = $user->name;
                }
            }
        }

        return ['data' => array_values($families)]; // Mengembalikan data dalam format ['data' => [...]]
    }

}
