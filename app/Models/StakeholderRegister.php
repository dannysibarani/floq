<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use App\Models\User; 
use App\Models\ProjectRole; 

use App\Models\Traits\CanBeScoped; 
use App\Models\Traits\HasProject; 
use App\Models\Traits\HasUser; 
use App\Models\Traits\HasProjectRole; 


class StakeholderRegister extends Model
{
	use CanBeScoped, HasProject, HasUser, HasProjectRole; 

	public static $resource_name = 'STAKEHOLDER_REGISTER'; 

	protected $fillable = [
		'project_id', 'user_id', 'project_role_id', 
		'requirements', 'expectation', 'classification'
	]; 
}
