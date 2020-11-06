<?php

namespace App\Models\Traits; 

use App\Models\Scoper\Scoper; 
use Illuminate\Database\Eloquent\Builder;

trait CanBeScoped 
{
	public function ScopeWithScopes(Builder $builder, array $scopes) {
		return (new Scoper(request()))->apply($builder, $scopes); 
	}
}