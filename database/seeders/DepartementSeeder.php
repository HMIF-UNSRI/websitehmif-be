<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departement::create([
            'name' => 'inti',
        ]);

        Departement::create([
            'name' => 'Administrasi',
            'logo' => 'administrasi/logo-adm.png',
            'description' => 'Dinas Administrasi adalah dinas yang bertanggung jawab dalam hal yang berhubungan dengan surat menyurat, pembuatan proposal, jadwal piket, laporan pertanggungjawaban dan anggaran dana, serta menyediakan absensi untuk setiap kegiatan HMIF.'
        ]);

        Departement::create([
            'name' => 'Akademik',
            'logo' => 'akademik/logo-akademik.png',
            'description' => 'Dinas Akademik adalah dinas yang bertanggung jawab dalam meningkatkan hal-hal yang berkaitan dengan akademik dan pengembangan teknologi.'
        ]);

        Departement::create([
            'name' => 'Kastrad',
            'logo' => 'kastrad/logo-kastrad.png',
            'description' => 'Kastrad (Kajian Strategis dan Advokasi) adalah dinas yang mengurusi hal-hal yang berkenaan dengan Propaganda serta Advokasi kampus, seperti mengkaji isu-isu yang ada, menampung aspirasi, serta menjadi wadah demi terwujudnya AKSI (Aksi, Kritis, Sejahtera, dan Inovatif).'
        ]);

        Departement::create([
            'name' => 'Kominfo',
            'logo' => 'kominfo/logo-kominfo.png',
            'description' => 'Dinas Komunikasi dan Informasi (Kominfo) merupakan dinas yang berhubungan dengan media dan informasi yang berperan dalam pengelolaan dan visualisasi informasi secara faktual serta membagikan informasi tersebut kepada mahasiwa agar informasi dapat tersampaikan dengan baik.'
        ]);

        Departement::create([
            'name' => 'Kewirausahaan',
            'logo' => 'kwu/logo-kwu.png',
            'description' => 'Dinas Kewirausahaan adalah dinas yang bertanggung jawab dalam hal pendanaan untuk mendukung kegiatan HMIF serta berfokus dalam menanggung jawabi produksi penjualan produk HMIF. Dinas Kewirausahaan juga menjadi wadah untuk Mahasiswa Teknik Informatika untuk mengembangkan potensi kewirausahaan yang dimiliki.'
        ]);

        Departement::create([
            'name' => 'Pengembangan Minat dan Bakat',
            'logo' => 'pmb/logo-pmb.png',
            'description' => 'Dinas Pengembangan Minat dan Bakat atau Dinas PMB adalah dinas yang menjadi tempat untuk mewadahi serta membatu mengembangkan minat dan bakat mahasiswa informatika agar memiliki potensi dan kreativitas di bidang yang diminati sesuai dengan kemampuan. '
        ]);

        Departement::create([
            'name' => 'Pengembangan Sumber Daya Manusia',
            'logo' => 'psdm/logo-psdm.png',
            'description' => 'Dinas PSDM (Pengembangan Sumber Daya Manusia) bertanggung jawab dalam menciptakan kader yang unggul dan profesional, menjaga keharmonisan dan menciptakan suasana kekeluargaan di antara seluruh elemen kabinet Abhinaya. Mengemban tanggung jawab yang penting dalam menjaga dan meningkatkan kualitas SDM yang ada, peran Dinas PSDM merupakan salah satu faktor besar dalam keberlangsungan HMIF.'
        ]);
    }
}
