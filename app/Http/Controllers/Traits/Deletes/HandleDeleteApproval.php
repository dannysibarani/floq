<?php 

namespace App\Http\Controllers\Traits\Deletes; 

use App\Models\Approval; 

trait HandleDeleteApproval {
	public function deleteApproval(Approval $approval) {
        if(!$approval->trashed()) {
            $approval->delete(); 
        }
        else {
            $approval->forceDelete(); 
        }
	}
}