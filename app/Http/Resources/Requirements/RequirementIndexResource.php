<?php

namespace App\Http\Resources\Requirements;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Requirements\RequirementCategoryIndexResource; 
use App\Http\Resources\Requirements\RequirementPriorityIndexResource;
use App\Http\Resources\Requirements\RequirementVerificationIndexResource;
use App\Http\Resources\Requirements\RequirementPhaseIndexResource;

use App\Http\Resources\Projects\ProjectIndexResource; 
use App\Http\Resources\PrivateUserResource; 
use App\Http\Resources\ProjectRoles\ProjectRoleIndexResource;


class RequirementIndexResource extends JsonResource
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
            'sid' => $this->sid, 
            'requirements' => $this->requirements, 
            'acceptance_criteria' => $this->acceptance_criteria, 
            'business_objective' => $this->business_objective, 
            'deliverable' => $this->deliverable, 

            'category' => $this->categoryPayload(), 
            'priority' => $this->priorityPayload(), 
            'verifications' => $this->verificationsPayload(), 
            'phase' => $this->phasePayload(), 

            'project' => $this->projectPayload(),
            'user' => $this->userPayload(), 
            'project_role' => $this->projectRolePayload(), 

        ];
    }

    private function categoryPayload() {
        return $this->when(
            $this->relationLoaded('category'), 
            function() {
                return new RequirementCategoryIndexResource($this->category); 
            }
        );
    }

    private function priorityPayload() {
        return $this->when(
            $this->relationLoaded('priority'), 
            function() {
                return new RequirementPriorityIndexResource($this->priority); 
            }
        );
    }

    private function verificationsPayload() {
        return $this->when(
            $this->relationLoaded('verifications'), 
            function() {
                return RequirementVerificationIndexResource::collection($this->verifications); 
            }
        );
    }

    private function phasePayload() {
        return $this->when(
            $this->relationLoaded('phase'), 
            function() {
                return new RequirementPhaseIndexResource($this->phase); 
            }
        );
    }

    private function projectPayload() {
        return $this->when(
            $this->relationLoaded('project'), 
            function() {
                return new ProjectIndexResource($this->project); 
            }
        );
    }

    private function userPayload() {
        return $this->when(
            $this->relationLoaded('user'), 
            function() {
                return new PrivateUserResource($this->user); 
            }
        );
    }

    private function projectRolePayload() {
        return $this->when(
            $this->relationLoaded('projectRole'), 
            function() {
                return new ProjectRoleIndexResource($this->projectRole); 
            }
        );
    }
}
