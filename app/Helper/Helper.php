<?php

namespace App\Helper;

use App\Models\Staff;
use App\Models\Division;
use App\Models\Committee;
use App\Models\Departement;
use Illuminate\Support\Facades\Storage;

class Helper
{
    public static function getDepartementId($alias)
    {
        $deparetement = Departement::where('alias', $alias)->first();
        return $deparetement->id;
    }

    public static function getDivisionId($alias)
    {
        $division = Division::where('alias', $alias)->first();
        return $division->id;
    }

    public static function getDivisionsData($departement)
    {
        return $departement->divisions->map(function ($division) {
            return [
                'nama' => $division->name,
                'deskripsi' => $division->description,
            ];
        });
    }

    public static function getWorkProgramsData($departement)
    {
        return $departement->work_programs->map(function ($workProgram) {
            return [
                'nama' => $workProgram->name,
                'deskripsi' => $workProgram->description,
            ];
        });
    }

    public static function getMembersData($departement, $type)
    {
        $model = $type === 'committees' ? Committee::class : Staff::class;

        return $model::with(['departement', 'division'])
            ->where('departement_id', $departement->id)
            ->get()
            ->map(function ($item) {
                $divisionName = $item->division ? $item->division->alias : null;

                if ($item->position == 'Staff') {
                    $position = $item->position . ($divisionName ? " Divisi " . $divisionName : " Dinas " . $item->departement->alias);
                } else {
                    if ($item->departement->alias == 'Inti') {
                        $position = $item->position;
                    } else {
                        $position = $item->position . ($divisionName ? " " . $divisionName : " " . $item->departement->alias);
                    }
                }
                
                return [
                    'nama' => $item->name,
                    'jabatan' => $position,
                    'foto' => env('APP_URL') . Storage::url($item->photo),
                ];
            });
    }
}
