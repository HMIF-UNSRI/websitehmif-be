<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'Kiagus Muhammad Efan Fitriyan',
            'position' => 'Kadin',
            'photo' => 'akademik/bph/kiagus_muhammad_efan_fitriyan.png',
            'departement_id' => Helper::getDepartementId('Akademik')
        ]);

        Committee::create([
            'name' => 'Mahendra Dinata',
            'position' => 'Wakadin',
            'photo' => 'akademik/bph/mahendra_dinata.png',
            'departement_id' => Helper::getDepartementId('Akademik')
        ]);

        Committee::create([
            'name' => 'Dewa Sheva Dzaky',
            'position' => 'Kadiv',
            'photo' => 'akademik/bph/dewa_sheva_dzaky.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Committee::create([
            'name' => 'Jovanic Morgan',
            'position' => 'Kadiv',
            'photo' => 'akademik/bph/jovanic_morgan.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PIP')
        ]);

        Staff::create([
            'name' => 'Adnan Al Qadri',
            'position' => 'Staff',
            'photo' => 'akademik/staff/adnan_al_qadri.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'Ahmad Azhari',
            'position' => 'Staff',
            'photo' => 'akademik/staff/ahmad_azhari.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'Akbar Alfaidah',
            'position' => 'Staff',
            'photo' => 'akademik/staff/akbar_alfaidah.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'Farhan Nugraha',
            'position' => 'Staff',
            'photo' => 'akademik/staff/farhan_nugraha.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'Iman Carrazi Syamsidi',
            'position' => 'Staff',
            'photo' => 'akademik/staff/iman_carrazi_syamsidi.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'Karina May',
            'position' => 'Staff',
            'photo' => 'akademik/staff/karina_may.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'M. Adrian',
            'position' => 'Staff',
            'photo' => 'akademik/staff/m_adrian.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'M. Rifqi Edrial',
            'position' => 'Staff',
            'photo' => 'akademik/staff/m_rifqi_edrial.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'Zildjian Vito Sulaiman',
            'position' => 'Staff',
            'photo' => 'akademik/staff/zildjian_vito_sulaiman.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PTI')
        ]);

        Staff::create([
            'name' => 'M. Dzawil Fadhol Abidullah',
            'position' => 'Staff',
            'photo' => 'akademik/staff/m_dzawil_fadhol_abidullah.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PIP')
        ]);

        Staff::create([
            'name' => 'M. Davero Firmansyah',
            'position' => 'Staff',
            'photo' => 'akademik/staff/m_davero_firmansyah.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PIP')
        ]);

        Staff::create([
            'name' => 'M. Fathan Mukhlisan',
            'position' => 'Staff',
            'photo' => 'akademik/staff/m_fathan_mukhlisan.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PIP')
        ]);

        Staff::create([
            'name' => 'Philifs Bryan Sipahutar',
            'position' => 'Staff',
            'photo' => 'akademik/staff/philifs_bryan_sipahutar.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PIP')
        ]);

        Staff::create([
            'name' => 'Risky Armansyah',
            'position' => 'Staff',
            'photo' => 'akademik/staff/risky_armansyah.png',
            'departement_id' => Helper::getDepartementId('Akademik'),
            'division_id' => Helper::getDivisionId('PIP')
        ]);
    }
}
