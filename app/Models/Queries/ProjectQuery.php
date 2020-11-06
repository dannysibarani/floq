<?php

namespace App\Models\Queries; 


use App\Models\Project; 


class ProjectQuery {
	protected $project; 

	public function __construct(Project $project) {
		$this->project = $project; 
	}

	public function projectManager() {
		return $this->project->projectRoles()->where('name', 'Project Manager')->first()
					->users()->first(); 
	}

	public function projectSponsor() {
		return $this->project->projectRoles()->where('name', 'Project Sponsor')->first()
					->users()->first(); 
	}

	public function projectCustomer() {
		return $this->project->projectRoles()->where('name', 'Project Customer')->first()
					->users()->first(); 
	}

	public function stakeholders() {
		return $this->project->users()->has('projectRoles')->get();
	}
}
