<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Resources\ResourceIndexResource; 

use App\Models\Resource; 

class ResourceController extends Controller
{
	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(Resource::class); 
	}

	public function index() {
		$this->authorize('viewAny', Resource::class); 
		
		return ResourceIndexResource::collection(
			Resource::get()
		);
	}
}
