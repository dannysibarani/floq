<?php

namespace App\Http\Resources\Stakeholders;

use Illuminate\Http\Resources\Json\JsonResource;


use App\Http\Resources\Users\UserProfileIndexResource; 
use App\Http\Resources\Users\UserContactIndexResource; 
use App\Http\Resources\ProjectRoles\ProjectRoleIndexResource;
use App\Http\Resources\Roles\RoleIndexResource; 


class StakeholderProjectRoleResource extends JsonResource
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
            'id' => $this->user->id, 
            'name' => $this->user->name, 
            'email' => $this->user->email, 
            'profile' => $this->profilePayload(), 
            'contacts' => $this->contactsPayload(), 
            'roles' => $this->rolesPayload(), 
            'project_roles' => $this->projectRolesPayload(), 
        ]; 
    }

    private function profilePayload() {
        return $this->when(
            $this->user->relationLoaded('profile'), 
            function() {
                return new UserProfileIndexResource($this->user->profile); 
            }
        ); 
    }

    private function contactsPayload() {
        return $this->when(
            $this->user->relationLoaded('contacts'), 
            function() {
                return UserContactIndexResource::collection($this->user->contacts); 
            }
        ); 
    }

    private function rolesPayload() {
        return $this->when(
            $this->user->relationLoaded('roles'), 
            function() {
                return RoleIndexResource::collection($this->user->roles); 
            }
        ); 
    }

    private function projectRolesPayload() {
        return $this->when(
            $this->user->relationLoaded('projectRoles'), 
            function() {
                return ProjectRoleIndexResource::collection(
                    $this->user->projectRoles
                        ->where('project_id', $this->project_id)
                ); 
            }
        ); 
    }
}
