<?php

namespace App\Models\Traits; 

use App\Models\ProjectRole; 

trait HasProjectRole {
	public function projectRole() {
		return $this->belongsTo(ProjectRole::class, 'project_role_id', 'id'); 
	}
}
