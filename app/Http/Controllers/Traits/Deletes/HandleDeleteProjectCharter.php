<?php 

namespace App\Http\Controllers\Traits\Deletes; 

use App\Models\ProjectCharter\ProjectCharter; 

trait HandleDeleteProjectCharter {
	public function deleteProjectCharter(ProjectCharter $projectCharter) {
		$projectCharter->posc()->delete(); 
		$projectCharter->authority()->delete(); 
		$projectCharter->schedules()->delete(); 
		$projectCharter->approvals()->delete(); 
		$projectCharter->delete(); 
	}
}