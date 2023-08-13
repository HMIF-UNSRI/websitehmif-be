<?php

namespace Database\Seeders;

use App\Helper\Helper;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IntiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Committee::create([
            'name' => 'Abdullah Farauk',
            'position' => 'Ketua Himpunan',
            'photo' => 'inti/bph/abdullah_farauk.png',
            'departement_id' => Helper::getDepartementId('Inti')
        ]);

        Committee::create([
            'name' => 'Abel Bintang',
            'position' => 'Wakil Ketua Himpunan',
            'photo' => 'inti/bph/abel_bintang.png',
            'departement_id' => Helper::getDepartementId('Inti')
        ]);

        Committee::create([
            'name' => 'Hanif Syahri Ramadhani',
            'position' => 'Sekretaris Umum I',
            'photo' => 'inti/bph/hanif_syahri_ramadhani.png',
            'departement_id' => Helper::getDepartementId('Inti')
        ]);

        Committee::create([
            'name' => 'Vanya Terra Ardani',
            'position' => 'Sekretaris Umum II',
            'photo' => 'inti/bph/vanya_terra_ardani.png',
            'departement_id' => Helper::getDepartementId('Inti')
        ]);

        Committee::create([
            'name' => 'Dellin Irawan',
            'position' => 'Bendahara Umum I',
            'photo' => 'inti/bph/dellin_irawan.png',
            'departement_id' => Helper::getDepartementId('Inti')
        ]);

        Committee::create([
            'name' => 'Andini Dwipatricia',
            'position' => 'Bendahara Umum II',
            'photo' => 'inti/bph/andini_dwipatricia.png',
            'departement_id' => Helper::getDepartementId('Inti')
        ]);
    }
}
