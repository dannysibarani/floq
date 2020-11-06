<?php

namespace App\Models\Queries; 


use App\Models\User; 
use App\Models\Role; 
use App\Models\Project; 
use App\Models\Corporation; 
use App\Models\ProjectRole; 

use App\Models\Policy; 
use App\Models\Resource; 
use App\Models\PolicyResource;


class UserQuery {
	protected $user; 

	public function __construct(User $user) {
		$this->user = $user; 
	}

	/**
		USERS <--> ROLES
	*/
	public function syncRole(Role $role) {
		if($role != null) {
			/*$roles = $this->user->roles()->where('id', '<>', $role->id); 
			$roles->detach(); 
			$roles->sync($role); 
			*/
			$this->user->roles()->detach(); 
			$this->user->roles()->sync($role); 
			return true; 
		}
		else return false; 
	}

	public function syncRoleAsAdministrator() {
		$role = Role::where('name', 'ADMINISTRATOR')->first(); 
		return $this->syncRole($role); 
	}

	public function syncRoleAsMember() {
		$role = Role::where('name', 'MEMBER')->first(); 
		return $this->syncRole($role); 
	}

	public function hasAdministrator() {
		$role = $this->user->roles()->where('name', 'ADMINISTRATOR')->first(); 
		return !is_null($role); 
	}

	public function hasSuperAdministrator() {
		$role = $this->user->roles()->where('name', 'SUPER_ADMINISTRATOR')->first();  
		return !is_null($role); 
	}

	public function hasMember() {
		$role = $this->user->roles()->where('name', 'MEMBER')->first(); 
		return !is_null($role) || sizeof($role)==0; 
	}

	/**
		USERS <--> PROJECTS
	*/
	public function hasProject($project) {
		if($project instanceof Project) {
			return $this->user->projects()->where('id', $project->id)->first() != NULL;
		}
		else if(is_int_val($project)) {
			return $this->user->projects()->find($project) != NULL; 
		}
		else {
			return false; 
		}
	}

	public function addProject(Project $project) {
		if(!is_null($project)) {
			$this->user->projects()->sync($project); 
			return true; 
		}
		else return false; 
	}

	public function assignToProject(Project $project) {
		if(!is_null($project)) {
			$this->user->projects()->sync($project); 
			return true; 
		}
		else return false; 
	}

	/**
		USERS <--> CORPORATES
	*/
	public function corporation() {
		return $this->user->corporations()->first(); 
	}

	public function assignToCorporation(Corporation $corporation) {
		if(!is_null($corporation)) {
			$this->user->corporations()->detach(); 
			$this->user->corporations()->sync($corporation); 
			return true; 
		}
		else return false; 
	}

	/**
		USERS <--> PROJECT_ROLES
	*/
	/**
		$policyName = CREATE, VIEW, UPDATE & DELETE (from policies table)
		$resourceName = PROJECT_CHARTER, STAKEHOLDER_REGISTER, STAKEHOLDER_ANALYSIS, etc (from resources table)
	*/
	public function isPermitted($projectId, $policyName, $resourceName) {
		$projectRoles = $this->user->projectRoles()->where('project_id', $projectId)->get(); 
		if(count($projectRoles) == 0) return false; 

		$policy = Policy::where('name', $policyName)->first(); 
		if($policy == NULL) return false; 

		$resource = Resource::where('name', $resourceName)->first(); 
		if($resource == NULL) return false; 

		$isPermitted = false; 
		foreach($projectRoles as $projectRole) {
			$policyResource = $projectRole->policyResources()
				->where('policy_id', $policy->id)
				->where('resource_id', $resource->id)
				->first(); 

			if($policyResource!=NULL && $policyResource->pivot->is_permitted) {
				$isPermitted = true; 
			}
		}
		return $isPermitted; 
	}

}
