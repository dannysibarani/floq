<?php

use Illuminate\Database\Seeder;

use App\Models\ProjectCharter\ProjectCharter; 

class ProjectChartersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = App\Models\Project::where('name', 'PIAMSBBFP')->first(); 

			ProjectCharter::create([
				'project_id' => $project->id, 
				'project_purpose' => 'Peningkatan akses pelayanan perbankan dan jumlah nasabah Bank Mandiri untuk nasabah perorangan melalui pengembangan dan implementasi aplikasi Mandiri Social Banking', 
				'high_level_description' => 'Bank Mandiri berencana untuk mengembangkan dan mengimplementasikan aplikasi online berbasis Social Network Banking yang memungkinkan perekrutan nasabah baru dari generasi milenial melalui aplikasi sosial media, memberikan kemudahan akses dan meningkatkan volume transaksi layanan perbankan nasabah Mandiri perorangan. Aplikasi online yang dimaksud juga diharapkan untuk meningkatan tingkat enggagement nasabah terhadap layanan yang sudah ada dan memperluas cakupan segmentasi pasar milenieal. Dalam satu tahun sejak launching aplikasi ini diharapkan akan ada peningkatan sebanyak 12% pelanggan baru dan peningkatan pelayanan pelanggan sampai dengan 5%.', 
				'project_boundaries' => 'Proyek ini mencakup pengembangan solusi teknis dan non teknis, implementasi infrastruktur dan aplikasi, integrasi dengan media sosial, dokumentasi dan training, launching serta aktifitas pemasaran. Cakupan proyek ini tidak termasuk operasi dan pemeliharaan sistem, dan tidak termasuk nasabah korporasi.', 
				'key_deliverables' => 'Aplikasi Mandiri Social Banking yang terintegrasi dengan sosial media mainstream untuk merekrut nasabah dan calon nasabah baru beserta infrastruktur pendukung, dokumentasi aplikasi, dan pelatihan untuk team operasi.', 
				'high_level_requirements' => 'Aplikasi Mandiri Social Banking ini terintegrasi dengan Facebok Page Mandiri yang sudah ada ( www.facebook.com/bankmandiri/), dan harus sudah launching di bulan Desember 2019. Team operasi sudah mampu mengoperasikan dan melakukan pemeliharaan terhadap sistem secara mandiri sebulan sesudah launching. Aplikasi yang dihasilkan harus mempertimbangkan dan menjaga aspek keamanan sistem perbankan yang sudah ada. Diharapkan tingkat ketergantungan atau dependency terhadap terhadap perubahan atau update dari aplikasi sosial media yang digunakan akan sangat rendah.', 
				'overall_project_risk' => 'Keterlambatan launching aplikasi diperkirakan karena faktor kompatibilitas terhadap pengkinian atau updates dari aplikasi sosial media, serta dibutuhkannya pelatihan design dan pemrograman bagi team proyek yang akan teribat langsung dalam pembuatan aplikasi serta mengelola team dari kontraktor terpilih.', 
				'preapproved_financial_resources' => 'Pembiayaan proyek berasal dari budget tahunan HQ. Funding limit Rp.200 juta per bulan.', 
				'project_exit_criteria' => 'Aplikasi Social Banking Berbasis bisa diakses dan digunakan melalui Facebook Page Mandiri dengan baik, semua fungsi layanan dasar bisa bekerja dengan sempurna, fitur tambahan bisa digunakan oleh pengguna, dokumentasi aplikasi sudah dibuat, tidak ditemukan adanya fraud yang teridentifikasi dari awal, pelatihan buat team operasi sudah dijalankan.', 
			]);
    }
}

