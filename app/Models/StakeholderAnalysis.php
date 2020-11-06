<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\CanBeScoped; 
use App\Models\Traits\HasProject; 
use App\Models\Traits\HasUser; 
use App\Models\Traits\HasProjectRole; 

class StakeholderAnalysis extends Model
{
	use CanBeScoped, HasProject, HasUser, HasProjectRole; 

	public static $resource_name = 'STAKEHOLDER_ANALYSIS'; 

	protected $fillable = [
		'project_id', 'user_id', 'project_role_id', 
		'power', 'interest', 'influence', 'attitude'
	]; 
}
