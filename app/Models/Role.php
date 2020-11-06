<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\PolicyResource; 


class Role extends Model
{
	protected $fillable = [
		'name', 'descriptin', 
	]; 

	public function permissions() {
		return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id')
					->withPivot('is_permitted')
					->withTimestamps(); 
	}
}
