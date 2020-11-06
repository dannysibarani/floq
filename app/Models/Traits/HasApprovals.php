<?php

namespace App\Models\Traits; 

use App\Models\Approval; 

trait HasApprovals {
	public function approvals() {
		return $this->morphMany(Approval::class, 'approvalable'); 
	}
}