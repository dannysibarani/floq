<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Approval extends Model
{
	use SoftDeletes;
	
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'signature', 'approved', 'date'
	]; 

	public function approvalable() {
		return $this->morphTo('approvalable'); 
	}
}