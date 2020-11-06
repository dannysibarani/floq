<?php

namespace App\Models\Scoper\Scopes; 

use Illuminate\Database\Eloquent\Builder; 

use App\Models\Scoper\Contracts\Scope; 

class ProjectScope implements Scope 
{
	public function apply(Builder $builder, $value) {
		return $builder->whereHas('project', function($builder) use($value) {
			return $builder->where('project_id', $value); 
		});
	}
}