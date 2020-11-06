<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\QualityMetric; 


class QualityMetricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 

		QualityMetric::create([
			'project_id' => $project->id, 
			'sid' => 'QM001', 
			'items' => 'Reliability', 
			'metric' => 'Seberapa stabil perangkat lunak dan tingkat risiko kegagalan', 
			'measurement_method' => 'Insiden produksi, tingkat kegagalan rata-rata, pengujian beban, MTBF, MTTR', 
		]); 

		QualityMetric::create([
			'project_id' => $project->id, 
			'sid' => 'QM002', 
			'items' => 'Performance', 
			'metric' => 'Seberapa efisien kodenya, seberapa optimal arsitekturnya, apakah sistem dapat mengukur, memuat waktu halaman atau fungsionalitas utama', 
			'measurement_method' => 'Load testing, stress testing, soak testing', 
		]); 

		QualityMetric::create([
			'project_id' => $project->id, 
			'sid' => 'QM003', 
			'items' => 'Security', 
			'metric' => 'Seberapa besar kemungkinan penyerang dapat melanggar sistem, mengganggu atau mendapatkan akses ke informasi sensitif', 
			'measurement_method' => 'Jumlah kerentanan, waktu penyelesaian, penyebaran pembaruan, jumlah dan tingkat keparahan insiden keamanan', 
		]);

		QualityMetric::create([
			'project_id' => $project->id, 
			'sid' => 'QM004', 
			'items' => 'Maintainability and code quality', 
			'metric' => 'Seberapa mudah sistem melakukan debug, mengatasi masalah, memelihara, mengintegrasikan, dan memperluas dengan fungsionalitas baru', 
			'measurement_method' => 'Static code analysis, code complexity, lines of code (LOC)', 
		]);  

		QualityMetric::create([
			'project_id' => $project->id, 
			'sid' => 'QM005', 
			'items' => 'User Experience', 
			'metric' => 'Sejauh mana aplikasi dapat digunakan oleh pengguna tertentu untuk mencapai tujuan yang ditentukan dengan efektivitas, efisiensi, dan kepuasan dalam konteks penggunaan tertentu', 
			'measurement_method' => 'Usability testing', 
		]); 
    }
}
