<?php

use Illuminate\Database\Seeder;

use App\Models\ProjectScopeStatement; 

use App\Models\Project; 

class ProjectScopeStatementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$project = Project::where('name', 'PIAMSBBFP')->first(); 

    	ProjectScopeStatement::create([
    		'project_id' => $project->id, 
    		'project_scope_defenition' => 'Desain, pengembangan dan launching aplikasi Mandiri Social Banking serta infrastruktur pendukung yang dibutuhkan supaya aplikasi bisa bekerja dengan baik dan benar. Aplikasi tersebut harus launching di bulan Desember 2019. Proyek ini termasuk pembuatan dokumentasi aplikasi (manual operation) dan training untuk team operasi.', 
			'project_deliverables' => '1. Aplikasi Mandiri Social Banking yang terintegrasi dengan sosial media mainstream (Facebook Page) untuk merekrut nasabah dan calon nasabah baru beserta infrastruktur pendukung dengan layanan dasar sebagai berikut: Layanan dasar dari aplikasi ini adalah:  Online Account Opening  View Balance Account / Last Transactions  Money Transfer  Bills Payment  Credit Card Application  Investation & Insurance Layanan tambahan dari aplikasi ini adalah Video Banking dengan fitur sbb:  Account update  Account opening  Account reactivation  Bank statement requests  Token Request /Replacement  Mobile banking set-up  Pre-registration request  Login Details/ Password Reset  Other account enquiries, requests and complaints 2. Dokumentasi pengoperasioan aplikasi. 3. Training untuk team operasi.', 
			'product_acceptance_criteria' => ' Go live dengan 100% fungsi dasar dan 50% fitur tambahan berjalan dengan baik  Dokumen pengoperasian aplikasi dibuat dan disetujui oleh team operasi  Team operasi yang sudah mendapatkan training pengoperasian aplikasi  UAT sign-off oleh Project Sponsor, Project Customer & Manager Operasi', 
			'project_exclusion' => 'Cakupan proyek ini tidak termasuk operasi dan pemeliharaan sistem, dan tidak termasuk nasabah korporasi.', 
			'project_constrains' => ' Diutamakan menggunakan resource IT dan developer internal dari Mandiri  Diutamakan menggunakan vendor IT dan programmer yang sudah ada  Diutamakan memanfaatkan server, connectivity dan supporting element lain yang sudah dimiliki oleh Mandiri', 
			'project_assumptions' => ' Approval untuk akses ke sistem dan perangkat IT sudah didapatkan saat dokumen perencanaan proyek disetujui oleh semua key stakeholders  Tidak akan ada kebutuhan upgrade sistem pendukung seperti server, bandwidth koneksi internet, & power supply  Jika ada peningkatan sistem sekuriti akan dilakukan oleh team proyek berikutnya atau oleh team operasi', 
    	]); 
    }
}
