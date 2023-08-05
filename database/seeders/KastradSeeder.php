<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KastradSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'Anharul Zikri',
            'position' => 'Kepala Dinas',
            'photo' => 'kastrad/bph/anharul_zikri.png',
            'departement_id' => Helper::getDepartementId('Kastrad')
        ]);

        Committee::create([
            'name' => 'Della Susanti',
            'position' => 'Wakil Kepala Dinas',
            'photo' => 'kastrad/bph/della_susanti.png',
            'departement_id' => Helper::getDepartementId('Kastrad')
        ]);

        Committee::create([
            'name' => 'M. Rusnan Arkan',
            'position' => 'Kepala Divisi',
            'photo' => 'kastrad/bph/m_rusnan_arkan.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Politik Propaganda (POLPRO)')
        ]);

        Committee::create([
            'name' => 'M. Fairuz Abadi',
            'position' => 'Kepala Divisi',
            'photo' => 'kastrad/bph/m_fairuz_abadi.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Advokasi Kampus (ADKAM)')
        ]);

        Staff::create([
            'name' => 'Achmad Rausyan Fiker',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/achmad_rausyan_fiker.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Politik Propaganda (POLPRO)')
        ]);

        Staff::create([
            'name' => 'Ahmad Afif',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/ahmad_afif.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Politik Propaganda (POLPRO)')
        ]);

        Staff::create([
            'name' => 'Faradilla Maulia',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/faradilla_maulia.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Politik Propaganda (POLPRO)')
        ]);

        Staff::create([
            'name' => 'M. Rafi Wisesa Colletta Anindhita',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/m_rafi_wisesa_colletta_anindhita.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Politik Propaganda (POLPRO)')
        ]);

        Staff::create([
            'name' => 'Naufal Abrar Abhista',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/naufal_abrar_abhista.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Politik Propaganda (POLPRO)')
        ]);

        Staff::create([
            'name' => 'Syavira Amalia',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/syavira_amalia.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Politik Propaganda (POLPRO)')
        ]);

        Staff::create([
            'name' => 'Ayu Puspita Sari',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/ayu_puspita_sari.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Advokasi Kampus (ADKAM)')
        ]);

        Staff::create([
            'name' => 'Fascal Harya Putra',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/fascal_harya_putra.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Advokasi Kampus (ADKAM)')
        ]);

        Staff::create([
            'name' => 'Ksatria',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/ksatria.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Advokasi Kampus (ADKAM)')
        ]);

        Staff::create([
            'name' => 'M. Nurhadi',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/m_nurhadi.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Advokasi Kampus (ADKAM)')
        ]);

        Staff::create([
            'name' => 'Rhaudy Nahavira',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/rhaudy_nahavira.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Advokasi Kampus (ADKAM)')
        ]);

        Staff::create([
            'name' => 'Shatia Earlangga Pratama',
            'position' => 'Staff',
            'photo' => 'kastrad/staff/shatia_earlangga_pratama.png',
            'departement_id' => Helper::getDepartementId('Kastrad'),
            'division_id' => Helper::getDivisionId('Advokasi Kampus (ADKAM)')
        ]);
    }
}
