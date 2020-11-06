<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Libraries\Money; 

use App\Models\ProjectRole; 


class RiskRegister extends Model
{
	public static $resource_name = 'RISK_REGISTER'; 

	protected $fillable = [
		'project_id', 'sid', 'risk_category', 'risk_event', 'probability', 'impact', 
		'pxi', 'cost_value', 'contigency_value', 'risk_response', 'project_role_id'
	]; 

	public function getCostValueAttribute($amount) {
		return new Money($amount); 
	}

	public function getFormattedCostValueAttribute() {
		return $this->cost_value->formatted(); 
	}

	public function getContigencyValueAttribute($amount) {
		return new Money($amount); 
	}

	public function getFormattedContigencyValueAttribute() {
		return $this->contigency_value->formatted(); 
	}

	/*public function projectRole() {
		return $this->belongsTo(ProjectRole::class, 'project_id', 'id'); 
	}*/
}
