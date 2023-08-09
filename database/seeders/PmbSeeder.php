<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PmbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'Sultan Rafi Lukmanul Hakim',
            'position' => 'Kadin',
            'photo' => 'pmb/bph/sultan_rafi_lukmanul_hakim.png',
            'departement_id' => Helper::getDepartementId('PMB')
        ]);

        Committee::create([
            'name' => 'Aqshal Dinata Ramja',
            'position' => 'Kadiv',
            'photo' => 'pmb/bph/aqshal_dinata_ramja.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Seni')
        ]);

        Committee::create([
            'name' => 'Rayhan Muhammad Ilham',
            'position' => 'Kadiv',
            'photo' => 'pmb/bph/rayhan_muhammad_ilham.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Olahraga')
        ]);

        Staff::create([
            'name' => 'Ahmad Bintara Mansur',
            'position' => 'Staff',
            'photo' => 'pmb/staff/ahmad_bintara_mansur.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Olahraga')
        ]);

        Staff::create([
            'name' => 'Bagas Ramandari',
            'position' => 'Staff',
            'photo' => 'pmb/staff/bagas_ramandari.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Olahraga')
        ]);

        Staff::create([
            'name' => 'Rizki Naufal Hafizh',
            'position' => 'Staff',
            'photo' => 'pmb/staff/rizki_naufal_hafizh.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Olahraga')
        ]);

        Staff::create([
            'name' => 'Satria Dali Romadhon',
            'position' => 'Staff',
            'photo' => 'pmb/staff/satria_dali_romadhon.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Olahraga')
        ]);

        Staff::create([
            'name' => 'Wahyu Nugraha',
            'position' => 'Staff',
            'photo' => 'pmb/staff/wahyu_nugraha.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Olahraga')
        ]);

        Staff::create([
            'name' => 'Herlia Adella Salsabila',
            'position' => 'Staff',
            'photo' => 'pmb/staff/herlia_adella_salsabila.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Seni')
        ]);

        Staff::create([
            'name' => 'Nico Karuna',
            'position' => 'Staff',
            'photo' => 'pmb/staff/nico_karuna.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Seni')
        ]);

        Staff::create([
            'name' => 'Risma Melati',
            'position' => 'Staff',
            'photo' => 'pmb/staff/risma_melati.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Seni')
        ]);

        Staff::create([
            'name' => 'Tubagus Muhammad Arsyah',
            'position' => 'Staff',
            'photo' => 'pmb/staff/tubagus_muhammad_arsyah.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Seni')
        ]);

        Staff::create([
            'name' => 'Vera Meisantika',
            'position' => 'Staff',
            'photo' => 'pmb/staff/vera_meisantika.png',
            'departement_id' => Helper::getDepartementId('PMB'),
            'division_id' => Helper::getDivisionId('Seni')
        ]);
    }
}
