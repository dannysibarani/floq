<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User; 
use App\Models\Corporation; 

use App\Http\Resources\PrivateUserResource; 

use App\Models\Queries\UserQuery; 


class UserController extends Controller
{
	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(User::class); 
	}
	
	public function index(Request $request) {
		$this->authorize('viewAny', User::class); 

		$userQuery = new UserQuery($request->user()); 
		if($userQuery->hasSuperAdministrator()) {
			$userCorporation = Corporation::find($request->corporation); 
		}
		else $userCorporation = $request->user()->corporations()->first(); 

		$users = User::whereHas('corporations', function($query) use($userCorporation) {
			return $query->where('name', $userCorporation->name); 
		})->whereHas('roles', function($query) {
			return $query->where('name', '<>', 'ADMINISTRATOR'); 
		})->get(); 

		$users->load([
			'projectRoles'
		]);
		return PrivateUserResource::collection($users); 
	}

	public function show(User $user) { 
		return new PrivateUserResource($user); 
	}

	public function update(Request $request, User $user) {

	}
}
