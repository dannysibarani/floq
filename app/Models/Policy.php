<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Resource; 

class Policy extends Model
{
	public function resources() {
		return $this->belongsToMany(Resource::class, 'policy_resource', 'policy_id', 'resource_id')->withTimestamps(); 
	}
}
