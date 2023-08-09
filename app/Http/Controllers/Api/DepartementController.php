<?php

namespace App\Http\Controllers\Api;

use App\Helper\Helper;
use App\Models\Departement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DepartementController extends Controller
{
    /**
     * Get Inti Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas inti.
     */
    public function inti()
    {
        $inti = Departement::where('alias', 'Inti')->firstOrFail();

        $bph = Helper::getMembersData($inti, 'committees');

        return response()->json([
            'nama' => $inti->name,
            'bph' => $bph,
        ]);
    }

    /**
     * Get Administrasi Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas administrasi.
     */
    public function administrasi()
    {
        $adm = Departement::where('alias', 'ADM')->firstOrFail();

        $divisi = Helper::getDivisionsData($adm);
        $prokerUnggulan = Helper::getWorkProgramsData($adm);
        $bph = Helper::getMembersData($adm, 'committees');
        $staff = Helper::getMembersData($adm, 'staffs');

        return response()->json([
            'nama' => $adm->name,
            'logo' => env('APP_URL') . Storage::url($adm->logo),
            'deskripsi' => $adm->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }

    /**
     * Get Akademik Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas akademik.
     */
    public function akademik()
    {
        $akademik = Departement::where('alias', 'Akademik')->firstOrFail();

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
