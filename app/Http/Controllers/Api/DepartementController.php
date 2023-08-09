<?php

namespace App\Http\Controllers\Api;

use App\Helper\Helper;
use App\Models\Departement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DepartementController extends Controller
{
    /**
     * Get Data Akadmik
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas akademik.
     */
    public function akademik()
    {
        $akademik = Departement::where('name', 'Akademik')->firstOrFail();

        $divisi = Helper::getDivisionsData($akademik);
        $prokerUnggulan = Helper::getWorkProgramsData($akademik);
        $bph = Helper::getMembersData($akademik, 'committees');
        $staff = Helper::getMembersData($akademik, 'staffs');

        return response()->json([
            'nama' => $akademik->name,
            'logo' => env('APP_URL') . Storage::url($akademik->logo),
            'deskripsi' => $akademik->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }
}
