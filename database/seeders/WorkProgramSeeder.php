<?php

namespace Database\Seeders;

use App\Models\Departement;
use App\Models\WorkProgram;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkProgram::create([
            'name' => 'NGODING (Ngobrol dan Sharing) bareng Alumni',
            'description' => 'Merupakan sebuah kegiatan sharing dan ngobrol tentang pengalaman dan ilmu antara alumni informatika dengan mahasiswa, kegiatan ini bertujuan untuk mengikat tali silaturahmi dan membuka insight baru kepada mahasiswa informatika.',
            'departement_id' => $this->getDepartementId('Akademik')
        ]);

        WorkProgram::create([
            'name' => 'Seminar Konsentrasi Bidang Ilmu',
            'description' => 'Sebuah seminar tentang penjelasan mengenai bidang keilmuan yang akan dipilih mulai dari semester 4, bertujuan untuk mengarahkan mahasiswa agar dapat memilih bidang keilmuan yang tepat.',
            'departement_id' => $this->getDepartementId('Akademik')
        ]);

        WorkProgram::create([
            'name' => 'Pelatihan Algoritma dan Pemrograman Mahasiswa Baru',
            'description' => 'Suatu kegiatan yang bertujuan untuk membantu mahasiswa baru dalam memahami konsep algoritma dan pemrograman.',
            'departement_id' => $this->getDepartementId('Akademik')
        ]);

        WorkProgram::create([
            'name' => 'SEBLAK (Sharing Blak-blakan)',
            'description' => 'Suatu kegiatan yang bertujuan untuk membantu mahasiswa baru dalam memahami konsep algoritma dan pemrograman.',
            'departement_id' => $this->getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        WorkProgram::create([
            'name' => 'Upgrading Staff dan BPH HMIF 2023',
            'description' => 'Merupakan suatu kegiatan yang dapat melatih dan membimbing Staf dan BPH HMIF dalam meningkatkan mutu dan kualitas diri. Kegiatan ini diharapkan dapat meningkatkan jiwa kepemimpinan Staf dan BPH HMIF, serta membentuk kepengurusan HMIF yang solid, unggul, terampil, dan kompeten.',
            'departement_id' => $this->getDepartementId('Pengembangan Sumber Daya Manusia')
        ]);

        WorkProgram::create([
            'name' => 'Ready for Professional Placement',
            'description' => 'Merupakan kegiatan untuk membantu mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya dalam mendapatkan wawasan secara menyeluruh mengenai mekanisme pelaksanaan Kerja Praktek (KP).',
            'departement_id' => $this->getDepartementId('Administrasi')
        ]);

        WorkProgram::create([
            'name' => 'Pelatihan Penyusunan Proposal',
            'description' => 'Hampir setiap program kerja membutuhkan proposal. Selain itu, pada semester akhir membutuhkan pengajuan proposal untuk melakukan penelitian. Oleh karena itu, diperlukan adanya pelatihan penyusunan proposal untuk mengetahui alur penyusunan dan pengajuan proposal.',
            'departement_id' => $this->getDepartementId('Administrasi')
        ]);

        WorkProgram::create([
            'name' => 'Informatics Caring',
            'description' => 'Penyaluran keluh kesah dari seluruh mahasiswa informatika yang ditujukan kepada seluruh elemen informatika.',
            'departement_id' => $this->getDepartementId('Kastrad')
        ]);

        WorkProgram::create([
            'name' => 'Secangkir Teh Bersama Kajur',
            'description' => 'Pertemuan Internal HMIF dengan Kepala Jurusan Teknik Informatika, yang mendiskusikan terkait program kerja tiap dinas HMIF selama satu periode kepengurusan serta isu terkini yang perlu dibicarakan.',
            'departement_id' => $this->getDepartementId('Kastrad')
        ]);

        WorkProgram::create([
            'name' => 'Kastrad Peduli Kasih',
            'description' => 'Merupakan kegiatan dimana seluruh Internal HMIF mengunjungi dan memberi bantuan logistik serta ilmu pendidikan kepada panti asuhan.',
            'departement_id' => $this->getDepartementId('Kastrad')
        ]);

        WorkProgram::create([
            'name' => 'IF CUP',
            'description' => 'Merupakan Proker Lanjutan IF-Fun dimana merupakan wadah ajang Kompetisi untuk menunjukan kemampuan dan skill dalam Olahraga pada ruang Lingkup Keluarga IF.',
            'departement_id' => $this->getDepartementId('Pengembangan Minat dan Bakat')
        ]);

        WorkProgram::create([
            'name' => 'IF LEGION',
            'description' => 'IF FUN Kegiatan yang dapat membantu mahasiswa/i untuk mendapatkan bimbingan ataupun arahan pada bidang seni maupun olahraga secara terjadwal.',
            'departement_id' => $this->getDepartementId('Pengembangan Minat dan Bakat')
        ]);

        WorkProgram::create([
            'name' => 'IF FEST SENI',
            'description' => 'Merupakan kegiatan Perlomban di bidang seni yang di lakukan secara online yang memiliki beberapa cabang lomba seperti Cover Lagu, Doodle Art, dan Fotografi.',
            'departement_id' => $this->getDepartementId('Pengembangan Minat dan Bakat')
        ]);

        WorkProgram::create([
            'name' => 'Bazar Festival',
            'description' => 'Mengadakan bazar penjualan makanan, minuman, merchandise secara langsung di Kambang Iwak, TVRI, dan tempat yang memungkinkan lainnya untuk pemasukan keuangan HMIF. Serta menjual makanan ringan untuk berbuka puasa dan kegiatan amal bersama selama hari Ramadhan dimana dana hasil penjualan akan didonasikan untuk amal.',
            'departement_id' => $this->getDepartementId('Kewirausahaan')
        ]);

        WorkProgram::create([
            'name' => 'Baju Angkatan dan Jaket  HMIF',
            'description' => 'Mengadakan penjualan dan mengurus baju angkatan untuk mahasiswa baru dan jaket jurusan untuk mahasiswa informatika sebagai upaya kebersamaan dalam identitas atau almamater tambahan di jurusan Teknik informatika dan sebagai identitas Angkatan Teknik Informatika.',
            'departement_id' => $this->getDepartementId('Kewirausahaan')
        ]);

        WorkProgram::create([
            'name' => 'Seminar Design',
            'description' => 'Kegiatan seminar dengan tema design yang bertujuan untuk mengedukasi peserta tentang apa dan bagaimana cara mendesign.',
            'departement_id' => $this->getDepartementId('Kominfo')
        ]);

        WorkProgram::create([
            'name' => 'NGODE (Ngoding Dewekan)',
            'description' => 'Post code soal Alpro 1 atau yang berhubungan dengan mata kuliah yang ada.',
            'departement_id' => $this->getDepartementId('Kominfo')
        ]);

        WorkProgram::create([
            'name' => 'UMAT (Ucapan Selamat)',
            'description' => 'Post story bagi BPH & Staff HMIF yang sedang ulang tahun dan mahasiswa yang mendapatkan prestasi.',
            'departement_id' => $this->getDepartementId('Kominfo')
        ]);

        WorkProgram::create([
            'name' => 'Post Hari Besar',
            'description' => 'Ucapan hari-hari besar di feed dan story Instagram.',
            'departement_id' => $this->getDepartementId('Kominfo')
        ]);
    }

    private function getDepartementId($name)
    {
        $deparetement = Departement::where('name', $name)->first();
        return $deparetement->id;
    }
}
