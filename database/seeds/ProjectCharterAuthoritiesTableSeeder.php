<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\ProjectCharter\ProjectCharter; 
use App\Models\ProjectCharter\ProjectCharterAuthority; 


class ProjectCharterAuthoritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$project = Project::where('name', 'PIAMSBBFP')->first(); 
		$projectCharter = ProjectCharter::where('project_id', $project->id)->first(); 
		$projectCharter->authority()->save(
			ProjectCharterAuthority::create([
				'project_charter_id' => $projectCharter->id, 
				'staffing_decision' => 'Merekrut team internal dan vendor, memutuskan pemilihan vendor dan mengganti dengan vendor lain, memberikan tindak disiplin kepada anggota proyek, menolak dan memberikan persetujuan cuti team proyek.', 
				'budget_management_and_variance' => 'Menggunakan, mengelola, dan mengontrol daya proyek. Melakukan eskalasi kepada Sponsor & Key Stakeholders jika estimasi variasi biaya proyek lebih dari 5%.', 
				'technical_decisions' => 'Bekerja sama dan membuat keputusan teknis dengan Product Owner dalam mendefiniskan fungsi-fungsi atau layanan dasar dan fitur-fitur tambahan dari aplikasi. Bekerja sama dan membuat keputusan teknis dengan dan Head of IT Application Development dalam menggunaan resource IT.', 
				'conflict_resolution' => 'Mengambil keputusan untuk penyelesaian konflik dalam anggota proyek. Berkoordinasi dengan Project Sponsor dalam mengambil keputusan untuk penyelesaian konflik di luar anggota proyek.', 
				'sponsor_authority' => 'Mengambil keputusan untuk melakukan perubahan biaya proyek dan menghentikan proyek.', 
			])
		); 
    }
}
