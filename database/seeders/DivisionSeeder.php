<?php

namespace Database\Seeders;

use App\Helper\Helper;
use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::create([
            'name' => 'Pengembangan Teknologi Informasi',
            'alias' => 'PTI',
            'description' => 'Bertujuan untuk membantu serta menjembatani mahasiswa Teknik Informatika UNSRI dalam segala jenis urusan akademik. Divisi ini juga bertugas untuk memberikan segala macam bentuk aksi yang bersifat membagikan ilmu atau media informasi (web) kepada mahasiswa Teknik Informatika UNSRI.',
            'departement_id' => Helper::getDepartementId('Akademik')
        ]);

        Division::create([
            'name' => 'Pengembangan Ilmu Pengetahuan',
            'alias' => 'PIP',
            'description' => 'Bertujuan untuk memasifkan informasi mengenai Beasiswa, Lomba, dan Internship yang berkaitan dengan Jurusan Teknik Informatika. Divisi PIP juga bertugas untuk mengumpulkan informasi seputar materi pembelajaran yang ada pada jurusan Teknik Informatika seperti handbook yang berisikan materi mengenai pemrograman dasar dan beberapa materi lainnya.',
            'departement_id' => Helper::getDepartementId('Akademik')
        ]);

        Division::create([
            'name' => 'Advokasi Kampus',
            'alias' => 'Adkam',
            'description' => 'Divisi Advokasi Kampus (ADKAM) adalah divisi yang berkenaan tentang kegiatan-kegiatan advokasi didalam kampus, seperti penggalian informasi tentang hal yang menyangkut kesejahteraan Mahasiswa serta menampung aspirasi mahasiswa.',
            'departement_id' => Helper::getDepartementId('Kastrad')
        ]);

        Division::create([
            'name' => 'Politik Propaganda',
            'alias' => 'Polpro',
            'description' => 'Divisi Politik dan Propaganda (POLPRO) adalah divisi yang berfokus pada kegiatan mengamati, meneliti serta mengkaji isu-isu yang ada di dalam kampus demi terwujudnya kampus yang adil dan sejahtera bagi seluruh warga kampus.',
            'departement_id' => Helper::getDepartementId('Kastrad')
        ]);

        Division::create([
            'name' => 'Multimedia',
            'alias' => 'Mulmed',
            'description' => 'Divisi multimedia merupakan divisi yang berperan dalam penyebaran informasi berupa teks, gambar, video, audio, dan grafik, yang dibuat dalam bentuk digital melalui tampilan visual.',
            'departement_id' => Helper::getDepartementId('Kominfo')
        ]);

        Division::create([
            'name' => 'Hubungan Masyarakat',
            'alias' => 'Humas',
            'description' => 'Divisi Hubungan Masyarakat merupakan divisi yang berperan dalam mengelola informasi agar tersebar dan tersampaikan dengan baik serta sebagai penghubung antara organisasi dan publik.',
            'departement_id' => Helper::getDepartementId('Kominfo')
        ]);

        Division::create([
            'name' => 'Seni',
            'alias' => 'Seni',
            'description' => 'Divisi Seni merupakan wadah untuk menampung minat dan bakat di bidang seni yang dimiliki oleh mahasiswa informatika. Divisi Seni bertugas untuk menyalurkan dan mengembangkan kreativitas mahasiswa di bidang seni yang diharapkan dapat menciptakan sumber daya manusia yang berkualitas dan tetap melestarikan seni budaya yang ada.',
            'departement_id' => Helper::getDepartementId('PMB')
        ]);

        Division::create([
            'name' => 'Olahraga',
            'alias' => 'Olahraga',
            'description' => 'Divisi Olahraga merupakan wadah untuk menampung minat dan bakat di bidang olahraga yang dimiliki mahasiswa Informatika. Divisi Olahraga bertugas untuk menyalurkan dan mengembangkan potensi mahasiswa di bidang olahraga yang diharapkan dapat menciptakan sumber daya manusia yang berkualitas dan meningkatkan aktivitas fisik bagi mahasiswa',
            'departement_id' => Helper::getDepartementId('PMB')
        ]);
    }
}
