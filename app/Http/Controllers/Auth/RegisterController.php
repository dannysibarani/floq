<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User; 
use App\Http\Resources\PrivateUserResource;
use App\Http\Requests\Auth\RegisterRequest; 


class RegisterController extends Controller
{
	public function __invoke(RegisterRequest $request) {
		$user = User::create($request->only('email', 'name', 'password')); 
		return new PrivateUserResource($user); 
	}
}
