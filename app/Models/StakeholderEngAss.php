<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User; 


class StakeholderEngAss extends Model
{
	public static $resource_name = 'STAKEHOLDER_ENGAGEMENT_ASSESSMENT'; 
	
	protected $fillable = [
		'project_id', 'user_id', 'unware', 'resistant', 'neutral', 'supportive', 'leading'
	];

	public function user() {
		return $this->belongsTo(User::class, 'user_id', 'id'); 
	}
}

