<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\ProjectRole; 
use App\Models\RiskRegister; 

class RiskRegistersTableSeeder extends Seeder
{
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 
		$projectRole = ProjectRole::where('name', 'Project Manager')
						->where('project_id', $project->id)
						->first(); 

		RiskRegister::create([
			'project_id' => $project->id, 
			'sid' => 'R001', 
			'risk_category' => 'Project Delay', 
			'risk_event' => 'Kompetensi human resource', 
			'probability' => 0.5, 
			'impact' => 0.4, 
			'pxi' => 0.2, 
			'cost_value' => 7000000000, 
			'contigency_value' => 4000000000, 
			'risk_response' => 'Tambah Programmer', 
			'project_role_id' => $projectRole->id, 
		]);

		RiskRegister::create([
			'project_id' => $project->id, 
			'sid' => 'R002', 
			'risk_category' => 'Kompatibiltas Social Media', 
			'risk_event' => 'Update dari Facebook', 
			'probability' => 0.2, 
			'impact' => 0.2, 
			'pxi' => 0.04, 
			'cost_value' => 8000000000, 
			'contigency_value' => 320000000, 
			'risk_response' => 'Update source code', 
			'project_role_id' => $projectRole->id, 
		]);

		RiskRegister::create([
			'project_id' => $project->id, 
			'sid' => 'R003', 
			'risk_category' => 'Security', 
			'risk_event' => 'Security breach, fraud, etc.', 
			'probability' => 0.1, 
			'impact' => 0.2, 
			'pxi' => 0.02, 
			'cost_value' => 8000000000, 
			'contigency_value' => 320000000, 
			'risk_response' => 'Update source code', 
			'project_role_id' => $projectRole->id, 
		]);
    }
}
