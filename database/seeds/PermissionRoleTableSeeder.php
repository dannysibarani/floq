<?php

use Illuminate\Database\Seeder;

use App\Models\Role; 
use App\Models\Permission; 


class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$roles = Role::get(); 
		$permissions = Permission::get(); 

		foreach($roles as $role) {
			foreach($permissions as $permission) {
				$role->permissions()->attach($permission); 
			}
		}
    }
}
