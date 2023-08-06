<?php

namespace App\Http\Controllers\Api;

use App\Helper\Helper;
use App\Models\Departement;
use App\Http\Controllers\Controller;

class DepartementController extends Controller
{
    public function akademik()
    {
        $akademik = Departement::where('name', 'Akademik')->firstOrFail();

        $divisi = Helper::getDivisionsData($akademik);
        $prokerUnggulan = Helper::getWorkProgramsData($akademik);
        $bph = Helper::getMembersData($akademik, 'committees');
        $staff = Helper::getMembersData($akademik, 'staffs');

        return response()->json([
            'nama' => $akademik->name,
            'logo' => $akademik->logo,
            'deskripsi' => $akademik->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }
}
