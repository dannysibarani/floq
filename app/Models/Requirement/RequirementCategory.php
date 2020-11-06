<?php

namespace App\Models\Requirement;

use Illuminate\Database\Eloquent\Model;

class RequirementCategory extends Model
{
	public static $resource_name = 'REQUIREMENT'; 

	protected $fillable = [
		'project_id', 'name', 'description'
	]; 
}
