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

    /**
     * Get Kastrad Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas kastrad.
     */
    public function kastrad()
    {
        $kastrad = Departement::where('alias', 'Kastrad')->firstOrFail();

        $divisi = Helper::getDivisionsData($kastrad);
        $prokerUnggulan = Helper::getWorkProgramsData($kastrad);
        $bph = Helper::getMembersData($kastrad, 'committees');
        $staff = Helper::getMembersData($kastrad, 'staffs');

        return response()->json([
            'nama' => $kastrad->name,
            'logo' => env('APP_URL') . Storage::url($kastrad->logo),
            'deskripsi' => $kastrad->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }

    /**
     * Get Kominfo Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas kominfo.
     */
    public function kominfo()
    {
        $kominfo = Departement::where('alias', 'Kominfo')->firstOrFail();

        $divisi = Helper::getDivisionsData($kominfo);
        $prokerUnggulan = Helper::getWorkProgramsData($kominfo);
        $bph = Helper::getMembersData($kominfo, 'committees');
        $staff = Helper::getMembersData($kominfo, 'staffs');

        return response()->json([
            'nama' => $kominfo->name,
            'logo' => env('APP_URL') . Storage::url($kominfo->logo),
            'deskripsi' => $kominfo->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }

    /**
     * Get KWU Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas kwu.
     */
    public function kwu()
    {
        $kwu = Departement::where('alias', 'KWU')->firstOrFail();

        $divisi = Helper::getDivisionsData($kwu);
        $prokerUnggulan = Helper::getWorkProgramsData($kwu);
        $bph = Helper::getMembersData($kwu, 'committees');
        $staff = Helper::getMembersData($kwu, 'staffs');

        return response()->json([
            'nama' => $kwu->name,
            'logo' => env('APP_URL') . Storage::url($kwu->logo),
            'deskripsi' => $kwu->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }

    /**
     * Get PMB Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas pmb.
     */
    public function pmb()
    {
        $pmb = Departement::where('alias', 'PMB')->firstOrFail();

        $divisi = Helper::getDivisionsData($pmb);
        $prokerUnggulan = Helper::getWorkProgramsData($pmb);
        $bph = Helper::getMembersData($pmb, 'committees');
        $staff = Helper::getMembersData($pmb, 'staffs');

        return response()->json([
            'nama' => $pmb->name,
            'logo' => env('APP_URL') . Storage::url($pmb->logo),
            'deskripsi' => $pmb->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }

    /**
     * Get PSDM Data
     * 
     * Endpoint ini digunakan untuk mendapatkan data dari dinas psdm.
     */
    public function psdm()
    {
        $psdm = Departement::where('alias', 'PSDM')->firstOrFail();

        $divisi = Helper::getDivisionsData($psdm);
        $prokerUnggulan = Helper::getWorkProgramsData($psdm);
        $bph = Helper::getMembersData($psdm, 'committees');
        $staff = Helper::getMembersData($psdm, 'staffs');

        return response()->json([
            'nama' => $psdm->name,
            'logo' => env('APP_URL') . Storage::url($psdm->logo),
            'deskripsi' => $psdm->description,
            'divisi' => $divisi,
            'proker_unggulan' => $prokerUnggulan,
            'bph' => $bph,
            'staff' => $staff,
        ]);
    }
}
