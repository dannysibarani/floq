<?php 

namespace App\Http\Controllers\Traits\Deletes; 

use App\Models\StakeholderRegister; 

trait HandleDeleteStakeholderRegister {
	public function deleteStakeholderRegister(StakeholderRegister $stakeholderRegister) {
		$stakeholderRegister->delete(); 
	}
}