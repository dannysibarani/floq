<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Users\UserProfileIndexResource; 
use App\Http\Resources\Users\UserContactIndexResource; 
use App\Http\Resources\ProjectRoles\ProjectRoleIndexResource;
use App\Http\Resources\Roles\RoleIndexResource; 

class PrivateUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'name' => $this->name, 
            'email' => $this->email, 
            'profile' => new UserProfileIndexResource(
                $this->whenLoaded('profile')
            ), 
            'contacts' => UserContactIndexResource::collection(
                $this->whenLoaded('contacts')
            ), 
            'roles' => RoleIndexResource::collection(
                $this->whenLoaded('roles')
            ), 
            'project_roles' => ProjectRoleIndexResource::collection(
                $this->whenLoaded('projectRoles')
            ), 
        ]; 
    }
}
