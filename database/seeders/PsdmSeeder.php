<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PsdmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'M. Riza Pahlevi',
            'position' => 'Kadin',
            'photo' => 'psdm/bph/m_riza_pahlevi.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        Committee::create([
            'name' => 'Cinta Indriyani Putri Nabila',
            'position' => 'Wakadin',
            'photo' => 'psdm/bph/cinta_indriyani_putri_nabila.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        Staff::create([
            'name' => 'Dimas Putra Mufazzal',
            'position' => 'Staff',
            'photo' => 'psdm/staff/dimas_putra_mufazzal.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        Staff::create([
            'name' => 'M. Dwirizqy Wimbassa',
            'position' => 'Staff',
            'photo' => 'psdm/staff/m_dwirizqy_wimbassa.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        Staff::create([
            'name' => 'M. Adlan Azzikra',
            'position' => 'Staff',
            'photo' => 'psdm/staff/m_adlan_azzikra.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        Staff::create([
            'name' => 'M. Raihan Arrasyid',
            'position' => 'Staff',
            'photo' => 'psdm/staff/m_raihan_arrasyid.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        Staff::create([
            'name' => 'Revalina Ramadhani',
            'position' => 'Staff',
            'photo' => 'psdm/staff/revalina_ramadhani.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        Staff::create([
            'name' => 'Vellanindita Noorprameswari Yudoyono',
            'position' => 'Staff',
            'photo' => 'psdm/staff/vellanindita_noorprameswari_yudoyono.png',
            'departement_id' => Helper::getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);
    }
}
