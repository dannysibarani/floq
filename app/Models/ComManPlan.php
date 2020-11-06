<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User; 


class ComManPlan extends Model
{
	public static $resource_name = 'COMMUNICATION_MANAGEMENT_PLAN'; 

	protected $fillable = [
		'project_id', 'user_id', 'information', 'method', 'timing_or_frequency', 'sender_or_initiator'
	]; 

	public function user() {
		return $this->belongsTo(User::class, 'user_id', 'id'); 
	}
}