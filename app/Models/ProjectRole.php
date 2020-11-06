<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\PolicyResource; 
use App\Models\User; 


class ProjectRole extends Model
{
	public static $resource_name = 'PROJECT_ROLE'; 
	
	protected $fillable = [
		'project_id', 'name', 'description', 
	]; 

	public function policyResources() {
		return $this->belongsToMany(PolicyResource::class, 'policy_resource_role', 'project_role_id', 'policy_resource_id')
					->withPivot('is_permitted')
					->withTimestamps(); 
	}

	public function users() {
		return $this->belongsToMany(User::class, 'project_role_user', 'project_role_id', 'user_id')
					->withTimestamps(); 
	}
}
