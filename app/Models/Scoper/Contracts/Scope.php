<?php

namespace App\Models\Scoper\Contracts; 

use Illuminate\Database\Eloquent\Builder; 

interface Scope 
{
	public function apply(Builder $builder, $value); 
}