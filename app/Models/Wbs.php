<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder; 

class Wbs extends Model
{
	protected $table = 'wbses'; 

	public function scopeRoots(Builder $builder) {
		return $builder->whereNull('parent_id'); 
	}

	public function scopeParents(Builder $builder, Wbs $wbs) {
	}


	public function children() {
		return $this->belongsTo(Wbs::class, 'id', 'parent_id'); 
	}
}
