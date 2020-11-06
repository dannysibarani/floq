<?php 

namespace App\Http\Controllers\Traits\Deletes; 

use App\Models\ProjectRole; 

trait HandleDeleteProjectRole {
	public function deleteProjectRole(ProjectRole $projectRole) {
		$projectRole->policyResources()->detach(); 
		$projectRole->users()->detach(); 
		$projectRole->delete(); 
	}
}