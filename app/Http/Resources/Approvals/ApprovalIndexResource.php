<?php

namespace App\Http\Resources\Approvals;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\User; 
use App\Models\ProjectRole; 
use App\Models\Resource; 

use App\Http\Resources\Users\UserProfileIndexResource; 
use App\Http\Resources\Users\UserContactIndexResource; 
use App\Http\Resources\ProjectRoles\ProjectRoleIndexResource; 
use App\Http\Resources\Resources\ResourceIndexResource; 

class ApprovalIndexResource extends JsonResource
{
    public function toArray($request)
    {
        $user = User::find($this->user_id); 
        $projectRole = ProjectRole::find($this->project_role_id);
        $resource = Resource::find($this->resource_id); 
        return [
            'id' => $this->id, 
            'project_id' => $this->project_id, 
            'user_id' => $this->user_id, 
            'resource_id' => $this->resource_id, 
            'name' => $user->name, 
            'email' => $user->email, 
            'signature' => $this->signature, 
            'approved' => $this->approved, 
            'date' => $this->date, 
            'profile' => new UserProfileIndexResource(
                $user->profile 
            ), 
            'contacts' => UserContactIndexResource::collection(
                $user->contacts 
            ), 
            'project_role' => new ProjectRoleIndexResource(
                $projectRole
            ), 
            'resource' => new ResourceIndexResource(
                $resource
            ), 
        ];
    }
}
