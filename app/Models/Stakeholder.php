<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;


class Stakeholder extends Pivot
{
	protected $table = 'project_user'; 

	public static $resource_name = 'STAKEHOLDER'; 

	public function user() {
		return $this->belongsTo(User::class, 'user_id', 'id'); 
	}
}
