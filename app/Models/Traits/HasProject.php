<?php

namespace App\Models\Traits; 

use App\Models\Project; 

trait HasProject {
	public function project() {
		return $this->belongsTo(Project::class, 'project_id', 'id'); 
	}
}
