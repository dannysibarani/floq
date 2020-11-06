<?php

use Illuminate\Database\Seeder;

use App\Models\ProjectCharter\ProjectCharterPosc; 

class ProjectCharterPoscsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = App\Models\Project::where('name', 'PIAMSBBFP')->first(); 
		$projectCharter = $project->charter()->first(); 
		ProjectCharterPosc::create([
			'project_charter_id' => $projectCharter->id, 
			'po_scope' => 'Desain, pengembangan dan launching aplikasi Mandiri Social Banking serta infrastruktur pendukung bekerja dengan baik dan benar.', 
			'po_time' => 'Launching dari aplikasi dilakukan di bulan Desember 2019.', 
			'po_cost' => 'Biaya proyek keseluruhan tidak lebih dari Rp.600 juta.', 
			'po_other' => 'Aspek keamanan sistem perbankan yang ada harus dijaga.', 
			'sc_scope' => '100% fungsi dasar dari aplikasi Mandiri Social Banking bisa berjalan dengan baik dan 50% fitur tambahan yang diidentifikasi dari Stakeholder Requirements bisa digunakan dengan baik.', 
			'sc_time' => 'Launching dari aplikasi ini dilakukan sebelum libur nasional Tahun Baru 2020 (31 Desember 2019)', 
			'sc_cost' => 'Maksimal pembengkakan biaya proyek keseluruhan tidak lebih dari 10% dari budget yang ditetapkan.', 
			'sc_other' => 'Maksimal fraud adalah 0.001% dari jumlah total transaksi per bulannya.', 
		]); 
    }
}
