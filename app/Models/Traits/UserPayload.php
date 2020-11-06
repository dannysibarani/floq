<?php

namespace App\Models\Traits; 

use Illuminate\Http\Resources\PotentiallyMissing; 

use App\Http\Resources\PrivateUserResource; 


trait UserPayload {
    protected function userPayload($user) {
        if($user instanceof PotentiallyMissing) {
            return $user;
        }
        else {
            return new PrivateUserResource($user); 
        }
    }
}