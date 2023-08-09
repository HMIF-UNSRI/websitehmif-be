<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KominfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'Tiara Cinta Azzahra',
            'position' => 'Kadin',
            'photo' => 'kominfo/bph/tiara_cinta_azzahra.png',
            'departement_id' => Helper::getDepartementId('Kominfo')
        ]);

        Committee::create([
            'name' => 'Adys Syakhira Maharani',
            'position' => 'Wakadin',
            'photo' => 'kominfo/bph/adys_syakhira_maharani.png',
            'departement_id' => Helper::getDepartementId('Kominfo')
        ]);

        Committee::create([
            'name' => 'Yolendri Anisyahfitri',
            'position' => 'Kadiv',
            'photo' => 'kominfo/bph/yolendri_anisyahfitri.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Humas')
        ]);

        Committee::create([
            'name' => 'Elan Abdul Hakim',
            'position' => 'Kadiv',
            'photo' => 'kominfo/bph/elan_abdul_hakim.png',
            'departement_id' => Helper::getDepartementId('Kominfo')
        ]);

        Staff::create([
            'name' => 'Diva Sarasvati Azzahra',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/diva_sarasvati_azzahra.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Humas')
        ]);

        Staff::create([
            'name' => 'Hifzhan Jayyid',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/hifzhan_jayyid.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Humas')
        ]);

        Staff::create([
            'name' => 'M. Ikram',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/m_ikram.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Humas')
        ]);

        Staff::create([
            'name' => 'M. Ramadhan Syaputra',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/m_ramadhan_syaputra.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Humas')
        ]);

        Staff::create([
            'name' => 'Nanda Ramadhani Fitri',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/nanda_ramadhani_fitri.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Humas')
        ]);

        Staff::create([
            'name' => 'Putri Hidayahni',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/putri_hidayahni.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Humas')
        ]);

        Staff::create([
            'name' => 'Aida Zahwa',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/aida_zahwa.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);

        Staff::create([
            'name' => 'Evan Febrian',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/evan_febrian.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);

        Staff::create([
            'name' => 'Jimmy Maulana',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/jimmy_maulana.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);

        Staff::create([
            'name' => 'M. Harry Mahardhika T',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/m_harry_mahardhika_t.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);

        Staff::create([
            'name' => 'M. Farid Saputra',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/m_farid_saputra.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);

        Staff::create([
            'name' => 'M. Fahrezi',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/m_fahrezi.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);

        Staff::create([
            'name' => 'M. Haris Alvaro',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/m_haris_alvaro.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);

        Staff::create([
            'name' => 'M. Luthfi Jamal',
            'position' => 'Staff',
            'photo' => 'kominfo/staff/m_luthfi_jamal.png',
            'departement_id' => Helper::getDepartementId('Kominfo'),
            'division_id' => Helper::getDivisionId('Mulmed')
        ]);
    }
}
