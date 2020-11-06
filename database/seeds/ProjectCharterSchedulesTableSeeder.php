<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\ProjectCharter\ProjectCharter; 
use App\Models\ProjectCharter\ProjectCharterSchedule; 


class ProjectCharterSchedulesTableSeeder extends Seeder
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

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Project Launch', 
			'due_date' => '2019-07-31 00:00:00', 
			'order' => 1, 
			'description' => 'Project Launch', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Acquire Resource', 
			'due_date' => '2019-08-15 00:00:00', 
			'order' => 2, 
			'description' => 'Acquire Resource', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Requirement Definition', 
			'due_date' => '2019-08-31 00:00:00', 
			'order' => 3, 
			'description' => 'Requirement Definition', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Detailed Design', 
			'due_date' => '2019-09-15 00:00:00',
			'order' => 4, 
			'description' => 'Detailed Design', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'System Configuration', 
			'due_date' => '2019-09-30 00:00:00', 
			'order' => 5, 
			'description' => 'System Configuration', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Acquire & Install System', 
			'due_date' => '2019-09-15 00:00:00', 
			'order' => 6, 
			'description' => 'Acquire & Install System', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Application Development', 
			'due_date' => '2019-10-15 00:00:00', 
			'order' => 7, 
			'description' => 'Application Development', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Data Migration', 
			'due_date' => '2019-10-31 00:00:00', 
			'order' => 8, 
			'description' => 'Data Migration', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'System Documentation', 
			'due_date' => '2019-12-05 00:00:00', 
			'order' => 9, 
			'description' => 'System Documentation', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Testing', 
			'due_date' => '2019-12-10 00:00:00', 
			'order' => 10, 
			'description' => 'Testing', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Training', 
			'due_date' => '2019-12-15 00:00:00', 
			'order' => 11, 
			'description' => 'Training', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Product Launching', 
			'due_date' => '2019-12-20 00:00:00',  
			'order' => 12, 
			'description' => 'Product Launching', 
		]); 

		ProjectCharterSchedule::create([
			'project_charter_id' => $projectCharter->id, 
			'milestone' => 'Close Down', 
			'due_date' => '2020-01-15 00:00:00',  
			'order' => 13, 
			'description' => 'Close Down', 
		]); 
    }
}
