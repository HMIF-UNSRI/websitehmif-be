<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KewirausahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'Siti Maritza Aqila',
            'position' => 'Kepala Dinas',
            'photo' => 'kwu/bph/siti_maritza_aqila.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);

        Committee::create([
            'name' => 'Nila Sonia',
            'position' => 'Wakil Kepala Dinas',
            'photo' => 'kwu/bph/nila_sonia.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);

        Staff::create([
            'name' => 'Ahmad Azka Al Husaini',
            'position' => 'Staff',
            'photo' => 'kwu/staff/ahmad_azka_al_husaini.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);

        Staff::create([
            'name' => 'Feri Irawan',
            'position' => 'Staff',
            'photo' => 'kwu/staff/feri_irawan.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);

        Staff::create([
            'name' => 'M. Haikal Ash Shiddiq',
            'position' => 'Staff',
            'photo' => 'kwu/staff/m_haikal_ash_shiddiq.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);

        Staff::create([
            'name' => 'Meri Putri Andriyani',
            'position' => 'Staff',
            'photo' => 'kwu/staff/meri_putri_andriyani.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);

        Staff::create([
            'name' => 'Radia Rahmadia Razita',
            'position' => 'Staff',
            'photo' => 'kwu/staff/radia_rahmadia_razita.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);

        Staff::create([
            'name' => 'Yasmin Nuha Khoirunnisa',
            'position' => 'Staff',
            'photo' => 'kwu/staff/yasmin_nuha_khoirunnisa.png',
            'departement_id' => Helper::getDepartementId('Kewirausahaan')
        ]);
    }
}
