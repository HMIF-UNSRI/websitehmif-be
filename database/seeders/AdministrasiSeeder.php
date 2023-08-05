<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdministrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'Nabilla Yesikal',
            'position' => 'Kepala Dinas',
            'photo' => 'administrasi/bph/nabilla_yesikal.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Committee::create([
            'name' => 'Widya Fitriani',
            'position' => 'Wakil Kepala Dinas',
            'photo' => 'administrasi/bph/widya_fitriani.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Aisyah Fitri',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/aisyah_fitri.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Alfina Dwi Rahmi',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/alfina_dwi_rahmi.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Annisa Reida Raheima',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/annisa_reida_raheima.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Fildzah Nur Izzati',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/fildzah_nur_izzati.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Hafiz Muhammad Kurniawan',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/hafiz_muhammad_kurniawan.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Louis Mince Nababan',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/louis_mince_nababan.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'M. Rafly Perdana Putra',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/m_rafly_perdana_putra.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Nur Hidayat',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/nur_hidayat.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Steven',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/steven.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);

        Staff::create([
            'name' => 'Zweta Anggun Syafara',
            'position' => 'Staff',
            'photo' => 'administrasi/staff/zweta_anggun_syafara.png',
            'departement_id' => Helper::getDepartementId('Administrasi')
        ]);
    }
}
